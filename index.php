<?php

include 'connexion.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
	$email=$_POST['login'];
	$password=$_POST['password'];


	$req=$con->prepare("SELECT * FROM utilisateur where login=:l and password=:p");
	$req->execute(array(
                           'l'=>$email,
													 'p'=>$password

												 		)) or die(print_r($req->errorInfo()));
					$resultat=$req->fetch();

	//	var_dump($resultat);
	if ($resultat) {
		//////////
session_start();
$_SESSION["nom"]=$resultat["nomUtilisateur"];

		/////////
		$profil=$resultat['profil'];
	if ($profil=='Administrateur') {
		header ('Location:animal.php');
			}elseif ($profil=='client') {
		header ('Location:accueil.php');
		}
	} else {

	echo "Veuillez renseigner les bons identifiants ";
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css">
	<title></title>
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
						<form action "index.php" method="POST">
							  <!-- Email input -->
							  <div class="form-outline mb-4">
							    <input type="email" id="form2Example1" class="form-control" name="login" />
							    <label class="form-label" for="form2Example1">Email adress</label>
							  </div>

							  <!-- Password input -->
							  <div class="form-outline mb-4">
							    <input type="password" id="form2Example2" class="form-control" name="password" />
							    <label class="form-label" for="form2Example2">Password</label>
							  </div>



							  <!-- Submit button -->
							  <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>


							  </div>
							</form>
				</div>
			</div>
		</div>
</body>
</html>
