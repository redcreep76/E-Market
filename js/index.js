var amount = 6;

function affiche(category = "all") {
    var p = getProduits(category);
    var pages = Math.ceil(p.length / amount);
    for (var page = 0; page < pages; page++) {
        var ul = $(".nav-pills");
        var li = $("<li></li>");
        if (page == 0) {
            li.attr({"class":"active"});
        }
        var a = $("<a></a>").text(page + 1);      
        a.attr({"href":"#" + category + page, "data-toggle":"pill"});
        li.append(a);
        ul.append(li);
        var div = $(".tab-content");
        var section = $("<section></section>");
        if (page == 0) {
            section.attr({"id":category + page, "class":"row tab-pane fade in active"});
        } else {
            section.attr({"id":category + page, "class":"row tab-pane fade in"});
        }
        var list = $("<ul></ul>");
        list.attr({"class":"container"});
        for (var j = 0; j < amount; j++) {
            var index = page * amount + j;
            if (index >= p.length) {
                break;
            }
            var id = p[index];
            var produit = produits[id];
            
            var li = $("<li></li>");
            li.attr({"class": "col-md-4"});
            var article = $("<article></article>");
            article.append("<img src='" + produit.url + "' class='img-responsive center-block' />");
            article.append("<h3>" + produit.titre + "<span class='pull-right'>" + produit.prix + " €</span></h3>");
            article.append("<p>" + produit.description + "</p>");
            article.append("<a href='fiche-produit.php?id=" + id + "'><button type='button' class='btn btn-primary'>En savoir plus</button></a>");
            article.append("<a href='panier.php?action=add&id=" + id + "'><button type='button' class='btn btn-primary pull-right'>Ajouter au panier</button></a>");
            li.append(article);
            list.append(li);
            
        }
        section.append(list);
        div.append(section);
    }
}

function getProduits(category = "all") {
    var list = [];
    for (var i in produits) {
        var produit = produits[i];
        if ((category == "all") || (produit.categorie == category)) {
            list.push(i);
        }
    }
    return list;    
}