<?php

    $dsn="mysql:host=localhost;dbname=db_elevage";
    $user="root";
    $motdepasse="";
    try {
      $con=new PDO($dsn,$user,$motdepasse);
      echo "Connexion à notre bd reussi avec succés";
    } catch (PDOException $e) {
      print "Erreur !:".$e-> getmessage()."<br>";
      die();
    }
 ?>

 <?php
 if (isset($_POST["btnAjouterclient"])) {
 $nom=$_POST['nomC'];
 $adresse=$_POST['adresseC'];
 $telephone=$_POST['telephoneC'];

 $req1=$con->prepare("INSERT INTO client (nomclient,adresseclient,numtelclient)
  values (:n,:a,:t)");
  $req1->execute(array(
                       'n'=>$nom,
                       'a'=>$adresse,
                       't'=>$telephone,
                     )) or die(print_r($req1->errorInfo()));
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
    <nav class="navbar navbar-expand-lg bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">ELEVAGE</a>
            <div class="collapse navbar-collapse" id="
            navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="
                  page" href="accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="animal.php">Animeaux</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="client.php">Clients</a>
                  </li>
                <li class="nav-item">
                   <a class="nav-link" href="commande.php">Commande</a>
                     </li>
                   <li class="nav-item">
                     <a class="nav-link" href="utilisateur.php">Utilisateur</a>
                       </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
  </nav>



<div class="container">
  <div class="">
    <a class="btn btn-primary" href="
    ajouterclient.php">Ajouter</a>
  </div>
  <h1>Liste des Clients</h1>
  <table class="table table-primary">
    <thead>
      <tr>
          <td>NOM</td>
          <td>ADRESSE</td>
          <td>TELEPHONE</td>
          <td>OPERATION</td>
</tr>
    </thead>
    <tbody>
      <?php
          $req1=$con->prepare("select* from client");
          $req1->execute();
          while ($client=$req1->fetch()) {
            ?>
            <tr>
              <td><?php echo $client["nomclient"] ?> </td>
              <td><?php echo $client["adresseclient"] ?> </td>
              <td><?php echo $client["numtelclient"] ?> </td>
              <td>
                    <a class="btn btn-warning" href="modifierclient.php">Modifier</a>
                    <a  class="btn btn-danger"href="supprimerclient.php">Supprimer</a>
                    </td>
            </tr>

        <?php  }
       ?>
    </tbody>
  </table>
</div>
  </body>
</html>
