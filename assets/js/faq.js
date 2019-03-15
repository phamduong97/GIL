$(document).ready(function () {
    $(".question").click(function (e) {
        if($(this).siblings().hasClass("collapse show")){
            $(this).children("i").removeClass('active');
        }else{
            $(this).children("i").addClass('active');
        }
        
    });
});
