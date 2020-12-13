require('./bootstrap');

require('alpinejs');

const $ = require( "jquery" );
require('jquery-validation');

$(".onclick-spinner").on("click", function(){
    $(this).closest("form").validate({
        errorClass: "text-red-500 pt-1 text-sm",
        highlight: null,
    });
    if(!$(this).closest("form").valid())
        return;
    console.log($(this).closest("form").valid());
    var caller_id = $(this).attr('id').replace("Btn", "");
    console.log($(this).data('loading-text'));
    $("#"+caller_id+"LoadingSVG").removeClass("hidden");
    $("#"+caller_id+"BtnText").html($(this).data('loading-text'));
    $(this).closest("form").trigger('submit');
});