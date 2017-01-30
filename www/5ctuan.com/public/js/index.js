    /*延迟加载
    ----------------------------*/
    $("img.lazy").lazyload({threshold:-20,effect:"fadeIn"});

    

    $(".footer-seo,.hot-wrap").door();

    /*地区选择
    -------------------------------*/
    $(".area-selector").mouseover(function(){
        $(this).parent().addClass("hover");
        $(".area-item-wrap").fadeIn(100);
    });
    $(".brandbar-area").mouseleave(function(){
        $(".area-item-wrap").fadeOut(100);
        $(this).removeClass("hover");
    });

    /*banner
    --------------------------------*/
    $("#slider").slider();