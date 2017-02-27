function affiche(json) {
    var prix = 0.00;
    var ul = $("#produits");
    for (var i = 0; i < json.length; i++) {
        var id = json[i][0];
        var quantity = json[i][1];
        console.log(id);
        var produit = produits[id];
        var li = $("<li></li>").attr({"class":"container", "id":"item"});
        var img = $("<div></div>").attr({"class":"cold-md-3 col-sm-3 col-xs-3"});
        img.append("<img src='" + produit.url + "' />");
        li.append(img);
        var div = $("<div></div>").attr({"class":"col-md-8 col-md-offset-1 col-xs-11", "id":"description"});
        div.append("<h3>" + produit.titre + "</h3>");
        div.append("<p>" + produit.description + "</p>");
        var selection = $("<div></div>").attr({"id":"selection"});
        var select = $("<select disabled='true' name='quantity[]' form='form' class='form-control' id='quantity' onchange='location = this.options[this.selectedIndex].value'></select>");       
        for (var j = 1; j <= 30; j++) {
            if (j == quantity) {
                select.append("<option selected>" + j + "</option>");
            } else {
                select.append("<option>" + j + "</option>");
            }
            
        }
        selection.append(select);
        selection.append("<a href='panier.php?action=delete&id=" + id + "' <button class='btn btn-primary pull-right'>Supprimer</button>");     
        selection.append("<p>Prix: " + produit.prix + "€</p>");
        prix += produit.prix;
        div.append(selection);
        li.append(div);
        ul.append(li);
    }
    $("#total").html(prix);
}