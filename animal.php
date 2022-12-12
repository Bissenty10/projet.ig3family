<?php
session_start();
if (!isset($_SESSION["nom"])) {
  header('Location:index.php');
}
include'connexion.php';

if (isset($_POST["btnajouteranimal"])) {
$nom=$_POST['nomA'];
$espece=$_POST['especeA'];
$prix=$_POST['prixA'];
$quantite=$_POST['quantiteA'];
$description=$_POST['descriptionA'];

$req1=$con->prepare("INSERT INTO animal (nomanimal,espece,prix,quantite,description)
 values (:n,:e,:p,:q,:d)");
 $req1->execute(array(
                      'n'=>$nom,
                      'e'=>$espece,
                      'p'=>$prix,
                      'q'=>$quantite,
                      'd'=>$description,
                    )) or die(print_r($req1->errorInfo()));

}
if (isset($_POST['btnmodifieranimal'])){
  $idanimal=$_POST['idAmod'];
  $nom=$_POST['nomAmod'];
  $espece=$_POST['especeAmod'];
  $prix=$_POST['prixAmod'];
  $quantite=$_POST['quantiteAmod'];
  $description=$_POST['descriptionAmod'];



  $req=$con->prepare("UPDATE animal set nomanimal=:n,espece=:e,prix=:p,quantite=:q,description=:d
     where idanimal=:i");

  $req->execute(array(
      'n'=>$nom,
      'e'=>$espece,
      'p'=>$prix,
      'q'=>$quantite,
      'd'=>$description,
      'i'=>$idanimal
  )) or die(print_r($req->errorInfo()));

}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"
    href="bootstrap-5.0.2/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>

  <?php include 'menu.php';?>

<div class="container">
  <div class="">
    <a class="btn btn-primary" href="
    ajouteranimal.php">Ajouter</a>
  </div>
  <h1>Liste des Animaux</h1>
  <table class="table table-primary">
    <thead>
      <tr>
          <td>NOM</td>
          <td>ESPECE</td>
          <td>PRIX</td>
          <td>QUANTITE</td>
          <td>OPERATION</td>
</tr>
    </thead>
    <tbody>
      <?php
          $req1=$con->prepare("select* from animal");
          $req1->execute();
          while ($animal=$req1->fetch()) {
            ?>
            <tr>
              <td><?php echo $animal["nomanimal"] ?> </td>
              <td><?php echo $animal["espece"] ?> </td>
              <td><?php echo $animal["prix"] ?> </td>
              <td><?php echo $animal["quantite"] ?> </td>
              <td>
                    <a class="btn btn-warning" href="modifieranimal.php?id=<?php echo $animal['idanimal'] ?>">Modifier</a>
                    <a  class="btn btn-danger"href="supprimeranimal.php">Supprimer</a>

              </td>
            </tr>

        <?php  }
       ?>
    </tbody>
  </table>
</div>
  </body>
</html>
