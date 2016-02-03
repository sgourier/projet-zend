function lancer_partie( obj , url ){
    afficher_game(obj);

}


function afficher_game(obj){
    obj.style.display = "none";
    $(".container_admin_game").css("display","block");
}
setTimeout(function(){
    $el_parent.modal('hide');
}, 3000);



function tirer_chiffre(){
    alert();
    $.ajax({
        url: url
    }).done(function( data ) {
        alert(data.new) ;
    });
}