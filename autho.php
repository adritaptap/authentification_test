<?php 
session_start();
?>


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
	<?php 

	if (isset($_SESSION['pseudo']))
	{

		?>

		<div class="container content">
			<h1>Bienvenue sur La page de Le site.</h1>
			<h2>Un contenu exclusif rien que pour vous.</h2>



			<?php

			$login = $_SESSION['pseudo'];

			var_dump($_COOKIE['auth']);

			try

			{
				$bdd = new PDO('mysql:host=localhost;dbname=auth_test;charset=utf8', 'root', 'root', 
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}


			$req = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
			$req->execute(array($login));

			$donnees = $req->fetch();


			echo "<h3> Bonjour " . $donnees['prenom'] . " " . $donnees['nom'] . ".</h3>";


			?>

			<a href="deconnexion.php" class="btn btn-danger">Deconnexion</a>
		</div>

		<?php  
	}

	else {

		echo "<div class='container content'><h1>Vous devez être connecté pour acceder à cette page !</h1>";
		echo "<a href='index.php' class='btn btn-danger'>Retiourner à l'accueil</a></div>";

	}

	?>
</body>
</html>

