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
		<?php include("include/header.php") ?>
        
        <?php
            $category = isset($_GET['category']) ? $_GET['category'] : "all";
        ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive center-block" src="images/carousel/1.jpg" alt="#">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" class="img-responsive center-block" src="images/carousel/2.jpg" alt="#">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="images/carousel/3.jpg" alt="#">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="images/carousel/4.jpg" alt="#">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="images/carousel/5.jpg" alt="#">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="tab-content"></div>
	
        <div class="row text-center">
            <ul class="pagination nav-pills"></ul>
		
        </div>
        
        <?php include("include/footer.php")  ?>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/data.js"></script>
        <script src="js/index.js"></script>
        <script>affiche("<?php echo($category);?>");</script>
	</body>
</html>