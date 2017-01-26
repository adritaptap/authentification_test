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
		<h1>Bienvenue sur Le site.</h1>
		<h2>Le seul, l'unique vous êtes sur Le site.</h2>

		<h3>Connexion</h3>
		<p>Vous ne pouvez pas vous inscrire, juste vous connecter !!!</p>

		<form method="post" action="login.php">
			<div class="form-group">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<label for="pseudo" > Pseudo </label>
						<input type="text" name="pseudo" class="form-control">

						<label for="mdp"> Mot de passe </label>
						<input type="password" name="mdp" class="form-control">

						<div class="row">
							<div class="col-md-offset-5 col-md-7"><br>
								<button type="submit" class="btn btn-success">Valider</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>