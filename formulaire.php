<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<title>Bootstrap</title>
	</head>

	<body>
		<?php include("include/header.php"); ?>

        <div class="row">
            <div class="container" id="form">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <h3>NOM</h3>
                    <input type="text" class="form-control" name="name"  placeholder="Ex: Simpson"/>
                    <br />
                    <h3>PRENOM</h3>
                    <input type="text" class="form-control" name="forname"  placeholder="Ex: Homer"/>
                    <br />
                    <h3>TELEPHONE</h3>
                    <input type="tel" class="form-control" name="telephone"  placeholder="Ex: 09 80 02 58 78"/>
                    <br>
                    <h3>EMAIL</h3>
                    <input type="email" class="form-control" name="mail"  placeholder="Ex: homer.simpson@gmail.com"/> 
                </div>
                
                <div class="col-md-5 col-md-offset-2 col-sm-offset-2 col-sm-5 col-xs-offset-0 col-xs-12">
                    <h3>ADRESSE</h3>
                    <input type="text" class="form-control" name="address"  placeholder="Ex: 742 Evergreen Terrace"/>
                    <br />
                    <h3>VILLE</h3>
                    <input type="text" class="form-control" name="city"  placeholder="Ex: Springfield"/>
                    <br />
                    <h3>CODE POSTAL</h3>
                    <input type="number" class="form-control" name="postal"  placeholder="Ex: 49007"/>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12" id="boutons">
                    <a href="index.php"><button class="btn btn-primary pull-left">Retour</button></a>
                    <button class="btn btn-primary pull-right">Valider</button>
                </div>
            </div>         
        </div>
        
        <?php include("include/footer.php"); ?>
        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
        <script src="js/menu.js"></script>
	</body>
</html>