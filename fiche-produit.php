<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">			
		<link rel="stylesheet" href="css/styles.css">		
		<title>Bootstrap</title>
	</head>

	<body>
		<?php include("include/header.php")?>
        
        <?php
            $id = isset($_GET['id']) ? $_GET['id'] : "";
        ?>
        
		<section id="fiche-produit" class="row"></section>
        
		<?php include("include/footer.php")?>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/data.js"></script>
        <script src="js/ficheProduit.js"></script>
        <script>affiche(<?php echo($id);?>);</script>
	</body>
</html>