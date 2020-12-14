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

$('.modal-toggler').on("click", function(){
    var target= $(this).data('target');
    if($(target + "-wrapper").hasClass("hidden")){
        OpenModal(target);
    }else{
        CloseModal(target);
    }
});

$('.onclick-close-modal').on("click", function(){
    CloseModal($(this).data('modal'));
});

function OpenModal(target){
    $(target + "-wrapper").removeClass("hidden");
    //bg
    $(target + "-bg").removeClass("ease-in duration-200");
    $(target + "-bg").addClass("ease-out duration-300");
    $(target + "-bg").removeClass("opacity-0");
    $(target + "-bg").addClass("opacity-100");
    //modal
    $(target).removeClass("ease-in duration-200");
    $(target).addClass("ease-out duration-300");
    $(target).removeClass("opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95");
    $(target).addClass("opacity-100 translate-y-0 sm:scale-100");
}

function CloseModal(target){
    //bg
    $(target + "-bg").removeClass("ease-out duration-300");
    $(target + "-bg").addClass("ease-in duration-200");
    $(target + "-bg").removeClass("opacity-100");
    $(target + "-bg").addClass("opacity-0");
    //modal
    $(target).removeClass("ease-out duration-300");
    $(target).addClass("ease-in duration-200");
    $(target).removeClass("opacity-100 translate-y-0 sm:scale-100");
    $(target).addClass("opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95");

    setTimeout(function(){
        $(target + "-wrapper").addClass("hidden");
    }, 200);
}