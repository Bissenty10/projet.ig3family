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
        <form class="form" action="animal.php" method="POST">
          <div class="mb-3">
          <label class="form-label">Nom animal</label>
          <input class="form-control" type="text" name="nomA">

      </div>
      <div class="mb-3">
          <label class="form-label">Espece</label>
          <input class="form-control" type="text" name="especeA">

      </div>
      <div class="mb-3">
        <label class="form-label">Prix</label>
        <input class="form-control" type="number" name="prixA">

      </div>
      <div class="mb-3">
          <label class="form-label">Quantite</label>
          <input class="form-control" type="number" name="quantiteA">

      </div>
      <div class="mb-3">
          <label class="form-label">Description</label>
          <input class="form-control" type="text" name="descriptionA">

      </div>
      <div class="mb-3">
          <input class="btn btn-success" type="submit" name="btnAjouteranimal">
      </div>
        </form>
      </div>
        </body>
      </html>
