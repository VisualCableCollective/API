require('./bootstrap');

require('alpinejs');

const $ = require( "jquery" );

$(".onclick-spinner").on("click", function(){
    console.log("hi");
    var caller_id = $(this).attr('id').replace("Btn", "");
    console.log($(this).data('loading-text'));
    $("#"+caller_id+"LoadingSVG").removeClass("hidden");
    $("#"+caller_id+"BtnText").html($(this).data('loading-text'));
});