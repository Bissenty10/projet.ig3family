<?php
session_start();
if (!isset($_SESSION["nom"])) {
  header('Location:index.php');
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
	<nav class="navbar navbar-expand-lg bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">ELEVAGE</a>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="animal.php">Animeaux</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="client.php">Clients</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="commande.php">COMMANDES</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="utilisateur.php">Utilisateurs</a>
		        </li>
		      </ul>
		      <form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form>
		    </div>
		  </div>
		</nav>

	<div class="container">
		<div class="mt-4">
			<div class="card" style="width: 18rem;">
		  <img src="..." class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>

	</div>

</body>
</html>
