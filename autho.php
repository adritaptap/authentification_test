<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test authentification</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css" >	

</head>
<body>
	<div class="container content">
		<h1>Bienvenue sur La page de Le site.</h1>
		<h2>Un contenue exclusif rien que pour vous.</h2>

		
		
		<?php

		$id = $_GET['id'];

		try

		{
			$bdd = new PDO('mysql:host=localhost;dbname=auth_test;charset=utf8', 'root', 'root', 
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}


		$req = $bdd->prepare('SELECT * FROM users WHERE id = ?');
		$req->execute(array($_GET['id']));

		$donnees = $req->fetch();


		echo "<h3> Bonjour " . $donnees['prenom'] . " " . $donnees['nom'] . ".</h3>";

	
	?>

	<a href="index.php" class="btn btn-danger">Deconnxeion</a>
</div>
</body>
</html>