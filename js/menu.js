
$(document).ready( function () {
    // On cache les sous-menus :
    $(".nav ul.subMenu").hide();
	$(".nav ul.subMenu2").hide();
    // On sélectionne tous les items de liste portant la classe "toggleSubMenu"
    // et on remplace l'élément span qu'ils contiennent par un lien :
    $(".nav li.toggleSubMenu span").each( function () {
        // On stocke le contenu du span :
        var TexteSpan = $(this).text();
        $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '<\/a>') ;
    } ) ;
	
	
	$(".nav li.toggleSubMenu2 span").each( function () {
    // On stocke le contenu du span :
    var TexteSpan = $(this).text();
    $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '<\/a>') ;
    } ) ;

    // On modifie l'évènement "click" sur les liens dans les items de liste
    // qui portent la classe "toggleSubMenu" :
    $(".nav li.toggleSubMenu > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu:visible").length != 0) {
            $(this).next("ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") });
		    $(".nav ul.subMenu2").hide();
	   }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".nav ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") });
            $(this).next("ul.subMenu").slideDown("normal", function () { $(this).parent().addClass("open") });
			$(".nav ul.subMenu2").hide();
	   }
		
		
		
        // On empêche le navigateur de suivre le lien :
        return false;
    });
	
	    $(".nav li.toggleSubMenu2 > a").click( function () {
        // Si le sous-sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu2:visible").length != 0) {
            $(this).next("ul.subMenu2").slideUp("normal", function () { $(this).parent().removeClass("open") });
        }
        // Si le sous-sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".nav ul.subMenu2").slideUp("normal", function () { $(this).parent().removeClass("open") });
            $(this).next("ul.subMenu2").slideDown("normal", function () { $(this).parent().addClass("open") });
        }
		
		
		
        // On empêche le navigateur de suivre le lien :
        return false;
    });

	
} ) ;

function ajoutAlbum(){
	$('#navigation').append('<div id="basdepage">totototo</em>');
}


