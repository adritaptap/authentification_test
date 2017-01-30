<?php 
session_start();

	
	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp']; 
	
	try

	{
		$bdd = new PDO('mysql:host=localhost;dbname=auth_test;charset=utf8', 'root', 'root', 
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}


	$req = $bdd->query('SELECT * FROM users');

	while ($donnees = $req->fetch()) {

		if (($donnees['pseudo'] == $pseudo) && ($donnees['mdp'] == $mdp))

		{
			$_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
			
			if (isset($_POST['remember']))
			{	
				setcookie('auth',  $_SESSION['pseudo'], time() + 180, null, null, false, true);
			} 	


			header('Location: autho.php');
		}

	};

	// $request->closeCursor();
	?>

	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test authentification</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1>Votre mot de passe ou votre identifant n'est pas correct</h1>
		<a href="index.php" class="btn btn-danger">Essayer de nouveau</a>
	</div>
</body>
</html>


