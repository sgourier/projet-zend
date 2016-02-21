var baseUrl = null;
var timer = 10;

function lancer_partie( obj , url ){

    console.log("Lancer jeu");
    baseUrl = url;
    afficher_game(obj);
}


function afficher_game(obj){
    console.log("Affichage game");
    obj.style.display = "none";
    $(".container_admin_game").css("display","block");
    creer_partie();
    lancer_timer();
}


/****************************************************************************************/
/*                                      TIMER                                           */
/****************************************************************************************/

var actual_time = null;

function lancer_timer(){
    actual_time = timer;
    change_time();
}


function change_time(){
    if(actual_time >= 0){
        $(".timer").html(actual_time);
        actual_time--;
        window.setTimeout("change_time()", 1000);
    }
    else{
        tirer_chiffre();
        actual_time = timer;
    }

}


/****************************************************************************************/
/*                                      TIRAGES                                         */
/****************************************************************************************/

function tirer_chiffre(){
    $.ajax({
        url: baseUrl+"/tirage"
    }).done(function( data ) {
        alert(data.new) ;
    });
}


/****************************************************************************************/
/*                                      GAME                                            */
/****************************************************************************************/4
function creer_partie(){
    $.ajax({
        url: baseUrl+"game/new"
    }).done(function( data ) {
        alert(data) ;
    });
}

function endGame(url){
    $.ajax({
        url: baseUrl+"/tirage"
    }).done(function( data ) {
        alert(data.result) ;
    });
}


