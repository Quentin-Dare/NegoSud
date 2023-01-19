<!DOCTYPE html>
<html lang="en">

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Negosud</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link  rel= "stylesheet" href="css/Connexion.css" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/path/to/flickity.css" media="screen">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="Negosud.js"></script>
  <script src="/path/to/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>	
</head>

<body>
    <div class="container">

         <!--En tête-->

        <?php 'header_pages.php' ?>

        <!-- Corps de texte -->

        <div class="row mx-auto">
            <div class="col-6">
                <h1>Pas encore inscrit ?</h1>
                <h2 style="text-transform: uppercase;">Créer votre compte</h2>
                <div>
                    <div class="flex-fill"><br><input type="text" name="adresse" placeholder="Entrez votre adresse e-mail *" class="form-control-sm form-only"></div>
                </div>
                <button type="button" href="#" class=" mb-5 bouton_produit_formulaire" style="text-transform: uppercase;">Créer votre compte</button>

            </div>

            <div class="col-6">
                <h1>Déjà inscrit ?</h1>
                <h2>CONNEXION</h2>

                <div>
                    <div class="flex-fill"><br><input type="text" name="name" placeholder="Entrez votre adresse e-mail *" class="form-control-sm form-only"></div>
                </div>
                <div>
                    <div class="flex-fill"><br><input type="text" name="password" placeholder="Entrez votre mot de passe *" class="form-control-sm form-only"></div>
                </div>

                <p><a href="#" class="lien_hypertext">Mot de passe oublié ?</a></p>

                <button type="button" href="#" class=" mb-5 bouton_produit_formulaire" style="text-transform: uppercase;">CONNEXION</button>


            </div>

        </div>

        <!--Footer -->

        <?php 'footer_pages.php' ?>

        
    </div>
 
</body>
</html>

