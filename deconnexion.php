<?php 

session_start();

session_destroy();

setcookie("auth", "", time() - 3600);

header('Refresh: 3; url=index.php');

echo "Vous êtes bien deconnecté à Le site.<br> vous allez être redirigé sur la page d'accueuil.";

?>