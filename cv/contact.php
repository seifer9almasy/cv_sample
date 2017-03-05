<?php include("header.php");?>
<div id="middle">
	<fieldset>
		<legend>Laissez vos coordonnées pour que je puisse vous contacter</legend>
		<form method="post" action="validation.php">
			<p>
				<label for="nom">Nom</label> : <input type="text" name="nom" id="nom" maxlength="30"/><br/><br/>
				<label for="prenom">Pr&eacute;nom</label> : <input type="text" name="prenom" id="prenom" maxlength="30"/><br/><br/>
				<label for ="mail">Mail</label> : <input type="email" name="mail" id="mail"/><br/><br/>
				<input type="submit" value="Envoyer"/>
			</p>
				
		</form>
	</fieldset>
</div>
<?php include("footer.php");?>