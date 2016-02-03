var baseUrl = null;

function lancer_partie( obj , url ){
    var baseUrl = url;
    afficher_game(obj);
}


function afficher_game(obj){
    obj.style.display = "none";
    $(".container_admin_game").css("display","block");
}
setTimeout(function(){
    $el_parent.modal('hide');
}, 3000);

/****************************************************************************************/
/*                                      GAME                                            */
/****************************************************************************************/
function endGame(url){
    $.ajax({
        url: baseUrl+"/tirage";
    }).done(function( data ) {
        alert(data.result) ;
    });
}




/****************************************************************************************/
/*                                      TIRAGES                                         */
/****************************************************************************************/

function tirer_chiffre(){
    alert();
    $.ajax({
        url: baseUrl+"/tirage";
    }).done(function( data ) {
        alert(data.new) ;
    });
}