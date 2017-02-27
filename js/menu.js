scrolling();

function scrolling() {
    var offset = $(".navbar-default").offset().top + 5;
    $(window).scroll(function(){
        if ($(document).scrollTop() > offset) {
            $(".navbar-default").addClass("affixe");
            $("body").addClass("marge");

        } else{
            $(".navbar-default").removeClass("affixe");
            $("body").removeClass("marge");
        }
    });
}