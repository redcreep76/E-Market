<header class="row" id="header">
    <div class="col-md-3 col-sm-3 col-xs-3">
        <img src="images/logo.png" alt="logo" />
    </div>
    <div class="col-lg-3 col-md-4 col-sm-9 col-xs-9 pull-right text-right">
        <a href="formulaire.php"><button class="btn btn-warning" id="profil">Mon profil <i class="fa fa-user fa-lg logo_user" aria-hidden="true"></i></button></a> 
        <a href="panier.php"><button class="btn btn-warning" id="panier">Mon panier <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></button></a>
    </div>	
    <div class="col-lg-6 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <div class="form-group input-group">
            <input type="text" class="form-control" name="search"  placeholder="Recherchez..."/>
            <span class="input-group-addon"><i class="fa fa-search fa" aria-hidden="true"></i></span>
        </div>	
    </div>
</header>
<nav class="navbar-default" id="menu">          
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.php">Accueil</a>
    </div>
    
    <div class="collapse navbar-collapse"  id="navbar">
        <ul class="nav navbar-nav">
            <li><a href="index.php?category=Guitare">Guitare</a></li>
            <li><a href="index.php?category=Basse">Basse</a></li>
            <li><a href="index.php?category=Clavier">Clavier</a></li>
            <li><a href="index.php?category=Batterie">Batterie</a></li>
            <li><a href="index.php?category=Amplis">Amplis</a></li>
        </ul>
    </div>
</nav>