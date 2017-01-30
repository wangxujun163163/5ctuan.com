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


    function a(){
        var a=$(document).scrollTop(),c=e;
        c=a>j&&k-g>a?!0:!1,e!=c&&(e=c,e?b.addClass("fixed"):b.removeClass("fixed"))
    }
    
    var b=$("#right_wrap"),c=$("#right_wrap_gift_wrap"),d=$("#bottom_article_title"),e=!1,f=b.offset().top,g=388,h=c.length?c.offset().top:f+g,i=56+c.height(),j=h+i,k=d.offset().top;
            $(window).bind("scroll",a)
            $(document).ready(a);

