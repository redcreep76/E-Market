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
            $action = isset($_GET['action']) ? $_GET['action'] : "";
            $id = isset($_GET['id']) ? $_GET['id'] : "";
            $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
            $quantity=$quantity > 0 ? $quantity : 1;   
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();
            } 
            if (($action == "delete") && (array_key_exists($id, $_SESSION['cart']))) {
                unset($_SESSION['cart'][$id]);
            }
            if ($action == "add") {
                $_SESSION['cart'][$id] = $quantity;
            }            
            $produits = [];
            foreach ($_SESSION['cart'] as $id => $value) {
                $produits[] = array($id, $value); 
            }
        ?>
        
        <div class="row">
            <ul id="produits"></ul>  
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="boutons">
                <h2 class="col-md-12 col-sm-12 col-xs-12 pull-right text-right">Total: <span id="total"></span> €</h2>
                <a href="index.php"><button class="btn btn-primary pull-left">Continuer mes achats</button></a>
                <a href="recapitulatif.php"><button type="submit" form="form" class="btn btn-primary pull-right">Valider</button></a>
            </div>
        </div>

        <?php include("include/footer.php"); ?>
        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/data.js"></script>
        <script src="js/panier.js"></script>
        <script>affiche(<?php echo(json_encode($produits));?>);</script>
	</body>
</html>