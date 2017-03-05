<?php include("header.php");?>
<div id="middle">
	<?php
	  $nom = "";
	  $prenom = "";
	  $mail = "";
		//$db = new \PDO('mysql:host=localhost;dbname=news', 'root', '');


		$db = new PDO('mysql:host=localhost;dbname=cv', 'root', 'yourpassword');
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		$stmt = $db->prepare("INSERT INTO contact (nom, prenom, mail) VALUES (:nom, :prenom, :mail)");
		$stmt->bindParam(':nom', $nom);
		$stmt->bindParam(':prenom', $prenom);
		$stmt->bindParam(':mail', $mail);

		if(isset($_POST['nom'])) {
					if(is_string($_POST['nom'])) {
						$nom = htmlspecialchars($_POST['nom']);
					}
					else {
						echo "saisissez un nom valide";
						?>
							<a href="contact.php">Retour</a>
						<?php
					}
				}
				else {
						echo "saisissez un nom";
						?>
							<a href="contact.php">Retour</a>
						<?php
				}
		if(isset($_POST['prenom'])) {
					if(is_string($_POST['prenom'])) {
						$prenom = htmlspecialchars($_POST['prenom']);
					}
					else {
						echo "saisissez un prénom valide";
						?>
							<a href="contact.php">Retour</a>
						<?php
					}
				}
				else {
						$message = "saisissez un prenom";
						echo $message;
						?>
							<a href="contact.php">Retour</a>
						<?php
				}
		if(isset($_POST['mail'])) {
						$mail = htmlspecialchars($_POST['mail']);
					}
				else {
					echo "saisissez un mail valide";
					?>
							<a href="contact.php">Retour</a>
						<?php
				}
				$stmt->execute();
				ob_start();
				echo "envoi reussi";
				header('Location: contact.php');
				ob_get_clean();
	?>
</div>
<?php include("footer.php");?>
