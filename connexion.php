<?php

    $dsn="mysql:host=localhost;dbname=db_elevage";
    $user="root";
    $motdepasse="";
    try {
      $con=new PDO($dsn,$user,$motdepasse);
      ///echo "Connexion à notre bd reussi avec succés";
    } catch (PDOException $e) {
      print "Erreur !:".$e-> getmessage()."<br>";
      die();
    }
 ?>
