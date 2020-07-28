$(document).ready(function(){
    $(".dropdown").mouseenter(function(){
        $(this).animate({left: '250px',
                         height: '250px',width: '150px'});
    });
     $(".dropdown").mouseleave(function(){
        $(this).animate({left: '250px',
                         height: '50px',width: '140px'});
    });

})