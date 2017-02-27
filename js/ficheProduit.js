function affiche(id) {
    var article = $("<article class='container bordure'></article>");
    var produit = produits[id]; 
    var div1 = $("<div class='col-md-6 col-sm-6'></div>");
    div1.append("<h2>" + produit.titre + "</h2>");
    div1.append("<img src='" + produit.url + "' class='img-responsive' />");
    var section = $("<div class='col-md-6 col-sm-6 col-xs-12' style='padding-top: 50px'></div>");
    var div2 = $("<div class='col-md-12 col-sm-12 col-xs-12'></div>");
    div2.append("<h3 class='pull-right' id='block'>" + produit.prix + " €</h3>");
    var div4 = $("<div class='col-md-12 col-sm-12 col-xs-12'></div>");
    div4.append("<a id='block' class='pull-right' href='panier.php?action=add&id=" + id + "'><button type='button' class='btn btn-primary'>Ajouter au panier</button></a>");
    div4.append("<a class='pull-right' href='index.php'><button class='btn btn-primary'>Retour</button>");
    var div3 = $("<div class='col-md-12 col-sm-12 col-xs-12'></div>");
    div3.append("<p>" + produit.description + "</p>");   
    section.append(div2);
    section.append(div4);
    section.append(div3); 
    article.append(div1);
    article.append(section);
    $("#fiche-produit").append(article);
}