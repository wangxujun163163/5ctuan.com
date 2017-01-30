@include('public/header',["type"=>"index"])

<!--100%宽度内容区-->
<div class="fullpage">


    <!--焦点图-->
    <div class="widget-slider-wrap" id="slider" style="background-color: rgb(252, 102, 42);">
        <div class="widget-slider-container" zhugeiomc="首页_点击焦点图">
            <a class="widget-slider-item" href="http://www.miaoche.com/article/25396.html" target="_blank" style="display: block;">
                <img class="widget-slider-img" src="./images/776fc09637552ed735f28059f141bd34.jpg">
            </a>
            
            <div class="widget-slider-trigger">
                <a class="" href="http://www.miaoche.com/article/25676.html" target="_blank" img="http://s1.miaoche.com/image/original/2017-01-13/3c5e70f2fcd5bf3ec393acd4b362a02a.jpg" bgcolor="#d60100">这样做，多拿一份年终奖！</a>
                <a href="http://www.miaoche.com/article/25396.html" target="_blank" img="http://s1.miaoche.com/image/original/2017-01-12/776fc09637552ed735f28059f141bd34.jpg" bgcolor="#fc662a" class="selected">这样做，多赚一个月工资！</a>
                <a href="http://www.miaoche.com/article/24825.html" target="_blank" img="http://s1.miaoche.com/image/original/2017-01-10/b5d8748c9fd79cb3b389bc1eb10c56e3.jpg" bgcolor="#feb608" class="">快抄底！特惠换代车推荐</a>
                <a href="http://www.miaoche.com/shenzhen/tuan/" target="_blank" img="http://s1.miaoche.com/image/original/2017-01-03/46619d4ccc9017eb4a124d2bed491feb.jpg" bgcolor="#ffc729" class="">2017新年新车疯省榜！</a>
                <a href="http://www.miaoche.com/article/23926.html" target="_blank" img="http://s1.miaoche.com/image/original/2017-01-05/bd38971b3d635458022477392ae261e4.jpg" bgcolor="#ffffff" class="">冬天开车务必牢记这10条</a>
            </div>
        </div>
    </div>


@include("index/select")

@include("index/tiaojia")

@include("index/dianpin")

@include("index/wenda")

@include('index/footer')
