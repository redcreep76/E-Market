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
        
        <?php
            session_start();          
            $produits = [];
            foreach ($_SESSION['cart'] as $id => $value) {
                $produits[] = array($id, $value); 
            }
        ?>

        <div class="row">            
            <ul id="produits">
                <li class="container" id="item">                 
                    <h1 class="container text-center text-danger">Récapitulatif de votre commande</h1>
                </li>
            </ul>
         
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="boutons">
                <h2 class="col-md-12 col-sm-12 col-xs-12 pull-right text-right">Total: <span id="total"></span> €</h2>
                <a href="panier.php"><button class="btn btn-primary pull-left">Retour</button></a>                
                <button class="btn btn-primary pull-right">Payer</button>
                <a href="index.php"><button class="btn btn-primary pull-right" id="annuler">Annuler</button></a>
            </div>
        </div>
        
        <?php include("include/footer.php"); ?>
        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/data.js"></script>
        <script src="js/recapitulatif.js"></script>
        <script>affiche(<?php echo(json_encode($produits));?>);</script>
	</body>
</html>