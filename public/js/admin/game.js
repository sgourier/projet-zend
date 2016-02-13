var baseUrl = null;

function lancer_partie( obj , url ){

    console.log("Lancer jeu");
    var baseUrl = url;
    afficher_game(obj);
}


function afficher_game(obj){
    console.log("Affichage game");
    obj.style.display = "none";
    $(".container_admin_game").css("display","block");
}

/*
setTimeout(function(){
    $el_parent.modal('hide');
}, 3000);
*/

/****************************************************************************************/
/*                                      TIRAGES                                         */
/****************************************************************************************/

function tirer_chiffre(){
    alert();
    $.ajax({
        url: baseUrl+"/tirage"
    }).done(function( data ) {
        alert(data.new) ;
    });
}


/****************************************************************************************/
/*                                      GAME                                            */
/****************************************************************************************/
function endGame(url){
    $.ajax({
        url: baseUrl+"/tirage"
    }).done(function( data ) {
        alert(data.result) ;
    });
}


