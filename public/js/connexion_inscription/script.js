/**
 * Created by Thibault on 03/02/2016.
 */

$(".color_in").click( function(){
    var color_code = $(this).data("color");
    $(".color_player").val(color_code);

    $(".color_in").removeClass("active");
    $(this).addClass("active");
});