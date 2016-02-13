
$(".bouton_nb_cards").click( function(){

    $(".bouton_nb_cards").removeClass("active");
    $(this).addClass("active");

    $(".input_nb_cards").val($(this).data("nbcart"));

});




function verif_player_ready(){
    if( $(".input_nb_cards").val() != "" ){
        return true;
    }
    else{
        alert("Veuillez choisir votre nombre de carte pour continuer ");
        return false;
    }
}