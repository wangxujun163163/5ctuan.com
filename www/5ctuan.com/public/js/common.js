$.fn.extend({
        //滑动门，label切换
        door:function()
        {
            var _this = $(this);
            var _label = _this.find("span[idx]").css("cursor","pointer");
            var _content = _this.find("div[idx]");
            _label.click(function(){
                var _id = $(this).attr("idx");
                _label.removeClass("selected");
                $(this).addClass("selected");
                _content.removeClass("selected");
                _content.each(function(){
                    if($(this).attr("idx") == _id){
                        $(this).addClass("selected");
                    }
                });
            });
        },
        //banner
        slider:function()
        {
            var _this=$(this),_link = $(".widget-slider-item"),_img=$(".widget-slider-img"),_menu=$(".widget-slider-trigger a");
            _menu.mouseover(function(){
                var _vimg = $(this).attr("img");
                var _bg = $(this).attr("bgcolor");
                var _vlink = $(this).attr("href");
                _this.css("backgroundColor",_bg);
                _img.fadeOut(function(){
                    _img.attr("src",_vimg).fadeIn();
                });
                _link.attr("href",_vlink);
                _menu.removeClass("selected");
                $(this).addClass("selected");
            });
        }
    });