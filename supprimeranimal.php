
<?php

session_start();
if (!isset($_SESSION["nom"])) {
  header('Location:index.php');
}

include 'connexion.php';
$idA=$_GET['id'];

	$req1=$con->prepare("SELECT * FROM animal WHERE idanimal=:i");
	$req1->execute(array(
		            "i"=>$idA
					)) or die (print_r($req1->errorInfo()));
	$anim=$req1->feTch();
	//var_dump($anim);

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
		<h1>Supprimer Animal</h1>
		<form class="form" action="animal.php" method="POST">

		<input type="hidden" name="idAmod" value="<?php echo $anim['idanimal']; ?>" >

			<div class="mb-3">
				<label class="form-label">Nom animal</label>
				<input class="form-control" type="text" name="nomAmod" value="<?php echo $anim['nomanimal'] ?>"disabled>
			</div>
			<div class="mb-3">
				<label class="form-label">Espece</label>
				<input class="form-control" type="text" name="especeAmod" value="<?php echo $anim['espece']?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Prix</label>
				<input class="form-control" type="number" name="prixAmod"value="<?php echo $anim['prix']?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Quantité</label>
				<input class="form-control" type="number" name="quantiteAmod"value="<?php echo $anim['quantite']?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Description</label>
				<input class="form-control" type="text" name="descriptionAmod"value="<?php echo $anim['description']?>">
			</div>
			<div class="mb-3">
				<input class="btn btn-success" type="submit" name="btnsupprimeranimal">
			</div>
		</form>
	</div>
</body>
</html>
