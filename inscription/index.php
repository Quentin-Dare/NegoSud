<!DOCTYPE html>
<html lang="en">

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Negosud</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link  rel= "stylesheet" href="css/Contact.css" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/path/to/flickity.css" media="screen">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="Negosud.js"></script>
</head>

<body>
    <div class="container">

         <!--En tête-->

        <header>
            <div class="row mt-2 mb-5 header">
        
              <div class="col-lg-12 logo_negosud">
                <a href="Negosud.html">
                  <img src="./img/logo_vin_4-removebg-preview.jpg" alt="logo negosud" title="logo negosud" class="img-fluid">
                </a>
              </div>  

            </div>
          </header>

        <!--Formulaire-->
        <div class="title text-center">
            <h1>Créer votre compte</h1>
        </div>

        <div class="row div_formulaire mx-auto">
            <div class="col-lg-8">
                <div class="bouton_radio">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="monsieur">
                        <label class="form-check-label" for="flexRadioDefault1">
                         Mr
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="monsieur"checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                         Mme
                        </label>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="mr-2 flex-fill"> Nom *<br><input type="text" name="name"  placeholder="Votre Nom *" class="form-control-sm input_margin"></div>
                    <div class="flex-fill">  Prénom *<br><input type="text" name="surname" placeholder="Votre Prénom *" class="form-control-sm input_espace"></div>
                </div>
                 
                <div>
                    <div class="flex-fill adresse"> Adresse e-mail *<br><input type="text" name="login" placeholder="Adresse e-mail *" class="form-control-sm form-only"></div>
                </div>
                
                <div class="d-flex">
                    <div class="mr-2 flex-fill"> Nouveau mot de passe *<br><input type="text" name="password"  placeholder="Entrez votre mot de passe *" class="form-control-sm input_margin"></div>
                    <div class="flex-fill">  Confirmer votre mot de passe *<br><input type="text" name="password" placeholder="Confimer votre mot de passe *" class="form-control-sm input_espace"></div>
                </div>       
                
                <div>
                    <div class="flex-fill"> Adresse *<br><input type="text" name="prenom" placeholder="Votre Adresse *" class="form-control-sm form-only"></div>
                </div>
                
                <div class="d-flex">
                    <div class="mr-2 flex-fill"> Code Postal *<br><input type="number" name="name"  placeholder="Votre Code Postal *" class="form-control-sm input_margin"></div>
                    <div class="flex-fill">  Ville *<br><input type="text" name="city" placeholder="Votre Ville *" class="form-control-sm input_espace"></div>
                </div>
                
                <button type="button" href="#" class=" mb-5 bouton_produit_formulaire">CONNEXION</button>
                
            </div>

            <div class="col-lg-4 image_formulaire">
                <img src="img/domaine La Bruyère.jpg" alt="">
            </div>

        </div>
    </div>

    <!--Footer-->

    <footer>
		<div class="row footer">
      <div class="col-lg-3 first_colonne">
		    <h3>NEGOSUD</h3>
        <a href="Contact.html">
          <img src="img/logo_vin_4-removebg-preview.jpg" alt="logo Negosud" title="" class="img-fluid image_footer" style="width:100px; height:100px;">
        </a>
        <div class="adresse_footer">
          <span>13 rue Claude Nougaro</span>
          <span>29000</span>
          <span>Auch</span>
        </div>
		  </div>

		  <div class="col-lg-3 nos_vin">
        <h3>NOS VINS</h3>
        <div class="text_footer">
          <ul>
            <a href="Vins_rouges.html"><li>Vins rouges</li></a>
            <a href="Vins_rosés.html"><li>Vins rosés</li></a>
            <a href="Vins_blancs.html"><li>Vins blancs</li></a>
            <a href="Armagniacs.html"><li>Armagniacs</li></a>
          </ul>
        </div>
		  </div>

      <div class="col-lg-3 a_propos">
        <h3>A PROPOS</h3>
        <div class="text_footer">
          <ul class="text-justify">
            <a href="Conditions_generales.html"><li>Conditions générales</li></a>
            <a href="Mentions_legales.html"><li>Mentions légales</li></a>                       
          </ul>
        </div>
		  </div>

      <div class="col-lg-3 mon_compte">
        <h3>MON COMPTE</h3>
        <div class="text_footer">
          <ul>
            <li><a href="#"></a>Se connecter</li>
            <li><a href="#"></a>Mes commandes</li>                    
          </ul>
        </div>      
		  </div>

    </div>
	</footer>

  <script src="/path/to/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>	
</body>

</html>