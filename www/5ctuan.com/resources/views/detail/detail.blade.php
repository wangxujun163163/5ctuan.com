@include("public/header",["type"=>"detail"])
    <!--100%宽度内容区-->
    <div class="fullpage" style="background-color:#0d94ff;">
        <!--1200宽度居中内容区-->
        <div class="content1200">
            <!--面包屑-->
            <div class="breadcrumb">
                <a href="http://www.miaoche.com/chengdu">首页</a>
                <i class="mciconfont icon sep"></i>
                <a href="http://www.miaoche.com/chengdu/tuan">成都团购</a>
                <i class="mciconfont icon sep"></i>
                <span>奥迪</span>
            </div>

            <!--品牌专区-->
            <div class="brand_special_wrap">
                <h1 class="brand_special_title">奥迪 2017年2月12日（周日）团购活动</h1>
                <div class="brand_special_left_wrap">
                    <div class="brand_special_dtime_wrap">
                        <p class="brand_special_dtime_nodtime">报名倒计时</p><p class="brand_special_dtime_flipclock" mc-clock-id="mc-clock-17784" end-time="2017-02-12 10:00:00" server-time="2017-01-29 16:46:43" mc-clock-idx="0"><span data-time="dd" class="mc-clock-time">13</span><span class="mc-clock-txt">天</span><span data-time="hh" class="mc-clock-time">17</span><span class="mc-clock-txt">时</span><span data-time="mm" class="mc-clock-time">13</span><span class="mc-clock-txt">分</span><span data-time="ss" class="mc-clock-time">02</span></p><p class="brand_special_num">已有173人报名参团</p>
                    </div>

                    
                    <div class="apply_wrap width500">
                        <div class="form_control">
                            <span class="key"><em class="redstar">*</em>品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌：</span>
                            <div class="value">
                                <select id="brandspecial_brand">
                                    <option value="17784" brandaliasid="1" selected="">奥迪</option>
                                    <option value="17788" brandaliasid="34">东风日产</option>
                                    <option value="17790" brandaliasid="123">一汽大众</option>
                                    <option value="17791" brandaliasid="50">广汽传祺</option>
                                    <option value="17792" brandaliasid="4">宝马</option>
                                    <option value="17793" brandaliasid="124">一汽丰田</option>
                                    <option value="17796" brandaliasid="12">奔驰</option>
                                    <option value="17797" brandaliasid="7">北京现代</option>
                                    <option value="17798" brandaliasid="81">雷克萨斯</option>
                                    <option value="17799" brandaliasid="115">沃尔沃</option>
                                    <option value="17800" brandaliasid="119">雪佛兰</option>
                                    <option value="17801" brandaliasid="109">斯柯达</option>
                                    <option value="17802" brandaliasid="103">上海大众</option>
                                    <option value="17804" brandaliasid="49">广汽本田</option>
                                    <option value="17806" brandaliasid="120">雪铁龙</option>
                                    <option value="17808" brandaliasid="30">东风标致</option>
                                    <option value="17810" brandaliasid="51">广汽丰田</option>
                                    <option value="17811" brandaliasid="14">别克</option>
                                    <option value="17814" brandaliasid="36">东风悦达起亚</option>
                                    <option value="17816" brandaliasid="122">英菲尼迪</option>
                                    <option value="17817" brandaliasid="53">广汽三菱</option>
                                    <option value="17880" brandaliasid="65">Jeep</option>
                                    <option value="17899" brandaliasid="19">长安福特</option>
                                </select>
                            </div>
                        </div>
                        <div class="form_control">
                            <span class="key"><em class="redstar">*</em>车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：</span>
                            <div class="value" id="brandspecial_series">
                                <span class="selector_item selected" seriesid="5">奥迪A4L</span>
                                <span class="selector_item" seriesid="6">奥迪A6L</span>
                                <span class="selector_item" seriesid="1536">奥迪Q3</span>
                                <span class="selector_item" seriesid="658">奥迪Q5</span>
                                <span class="selector_item" seriesid="1849">奥迪A3</span>
                                <span class="selector_item" seriesid="344">奥迪Q7</span>
                                <span class="selector_item" seriesid="695">奥迪A1</span>
                                <span class="selector_item" seriesid="192">奥迪A3-进口</span>
                                <span class="selector_item" seriesid="197">奥迪A4-进口</span>
                                <span class="selector_item" seriesid="503">奥迪A5</span>
                                <span class="selector_item" seriesid="788">奥迪A7</span>
                                <span class="selector_item" seriesid="194">奥迪TT</span>
                                <span class="selector_item" seriesid="195">奥迪A8L</span>
                            </div>
                        </div>
                        <div class="form_control">
                            <span class="key"><em class="redstar">*</em>购车方式：</span>
                            <div class="value" id="brandspecial_purchase">
                                <span class="selector_item selected" purchase="分期置换">分期置换</span><span class="selector_item" purchase="分期">分期</span><span class="selector_item" purchase="置换">置换</span><span class="selector_item" purchase="全款">全款</span>
                            </div>
                        </div>
                        <div class="form_control">
                            <span class="key"><em class="redstar">*</em>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
                            <div class="value">
                                <input placeholder="请输入购车人姓名" id="brandspecial_name">
                            </div>
                        </div>
                        <div class="form_control">
                            <span class="key"><em class="redstar">*</em>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</span>
                            <div class="value">
                                <input placeholder="请输入购车人手机号" id="brandspecial_mobile">
                            </div>
                        </div>
                        <span class="btn alignleft" id="brandspecial_btn">报名参团</span>
                    </div>
                </div>
                <div class="brand_special_right_wrap">
                    <div class="brand_special_info">
                        <p class="time">报名时间：2017年2月12日截止</p>
                        <p>团购地点：正规4S店(详细地址以短信通知为准)</p>
                        <p class="time">团购时间：2017年2月12日下午</p>
                        <p>团购价格：立享全城低价，无隐形消费</p>
                    </div>
                    <div class="brand_special_daily_series">
                        <p><b>日常特惠价</b></p>
                        <a class="daily_series_item a" href="http://www.miaoche.com/chengdu/search/se5.html" target="_blank">奥迪A4L<em>8.3折起</em></a>
                        <a class="daily_series_item b" href="http://www.miaoche.com/chengdu/search/se6.html" target="_blank">奥迪A6L<em>7.9折起</em></a>
                        <a class="daily_series_item c" href="http://www.miaoche.com/chengdu/search/se1536.html" target="_blank">奥迪Q3<em>8.2折起</em></a>
                        <a class="daily_series_item d" href="http://www.miaoche.com/chengdu/search/se658.html" target="_blank">奥迪Q5<em>8.3折起</em></a>
                    </div>
                    <div class="brand_special_img_wrap">
                        <img class="brand_special_img lazy" src="./images/ea1dc50ed124f12af9f67a8228f34ff6.jpg" data-original="http://s4.miaoche.com/image/original/2016-07-11/ea1dc50ed124f12af9f67a8228f34ff6.jpg" style="display: inline;">
                    </div>
                </div>
                @include("detail/userlist")
            </div>

    <!--主体内容区-->
    <div class="left_wrap">
                                                                                                                                                                                                                                                                                                                                
        <div class="info_item" id="info_item_brightness">
        <p class="info_title">成都 • 奥迪团购亮点</p>
        <ul class="ensure_big">
            <li><p class="ensure_big_content">团购仅限活动当日，秒车团指定4S店</p><p class="ensure_big_title">限时特卖</p>
            </li><li><p class="ensure_big_content">团购车型立享全城低价，无隐形消费</p><p class="ensure_big_title">真实低价</p>
            </li><li><p class="ensure_big_content">参团享低价，到场抽秒车礼，无隐形消费</p><p class="ensure_big_title">三重礼遇</p>
        </li></ul>
        <ul class="ensure_small">
            <li><p><i class="mciconfont icon"></i>新浪信誉保证<span>让您买车更加放心</span></p></li>
            <li><p><i class="mciconfont icon"></i>正规4S店车源<span>甄选厂商授权的正规4S店</span></p></li>
            <li><p><i class="mciconfont icon"></i>真实低价<span>现金直降，无隐形消费</span></p></li>
            <li><p><i class="mciconfont icon"></i>优先购车<span>保证优先提取现车</span></p></li>
            <li><p><i class="mciconfont icon"></i>全国联保<span>厂商授权正规4S店均可维修保养</span></p></li>
            <li><p><i class="mciconfont icon"></i>售后维权<span>秒车协助解决售后任何问题</span></p></li>
        </ul>
        </div>
                                                                                                                                                                                
        <div class="info_item">
        <p class="info_title">成都 • 奥迪团购活动流程</p>
        <ul class="step_wrap step4">
            <li class="a"><p class="step_title">报名</p><p>通过新浪秒车团购活动专题在线免费报名</p></li>
            <li class="b"><p class="step_title">确认</p><p>报名后新浪秒车客服将在2个工作日内电话与您确认参与细节</p></li>
            <li class="c"><p class="step_title">到店</p><p>按照客服和短信通知的4S店地址准时到店参加团购</p></li>
            <li class="d"><p class="step_title">订车</p><p>现场向4S店支付意向金，签意向订购车合同</p></li>
        </ul>
        </div>
                
        <div class="info_item">
            <p class="info_title">成都 • 奥迪团购常见问题</p>
            <div class="faq_wrap">
                <div class="q">Q：参加新浪秒车“秒车团”成都 • 奥迪团购活动购车能优惠多少钱？</div>
                <div class="faq_sep"></div>
                <div class="a_wrap"><span class="a_key">A：</span><span class="a_value">新浪网、新浪汽车、新浪秒车多年的运营经验，与所有的汽车厂商、全国大部分经销商保持良好的合作关系，厚积薄发，此次活动是新浪秒车甄选优质经销商，采取集团采购的方式与经销商谈判，每款车都在总经理特批价的基础上又有很大幅度的优惠，活动当日立享全城低价，到店抽秒车礼，无隐形消费。</span></div>
                <div class="faq_sep"></div>

                <div class="q">Q：参加新浪秒车“秒车团”成都 • 奥迪团购活动与自己单独去买有何不同？</div>
                <div class="faq_sep"></div>
                <div class="a_wrap"><span class="a_key">A：</span><span class="a_value">新浪秒车的活动都是集团采购的方式与经销商谈判，每款车都在总经理特批价的基础上又有很大幅度的优惠；新浪秒车还提供全程服务，协助您解决购买中的任何问题，避免个人谈判势单力薄的窘境。</span></div>
                <div class="faq_sep"></div>

                <div class="q">Q：参加新浪秒车“秒车团”成都 • 奥迪团购活动要收费吗？</div>
                <div class="faq_sep"></div>
                <div class="a_wrap"><span class="a_key">A：</span><span class="a_value">新浪秒车提供全程免费服务，不收取任何费用</span></div>
                <div class="faq_sep"></div>
            </div>
            <div class="faq_avatar_wrap" id="BizQQWPA3">
                <img class="avatar lazy" src="./images/grey-d114635a88a579cd2c0176afc5c5f68c.gif" data-original="http://s1.miaoche.com/pc/img/tuan/tuan_index_icon_online_avatar2-f5a7761db664a7d2d999bab3b2d784dc.png">
                <span>秒妹在线</span>
            </div>
        </div>

        @include("detail/list")
        <div class="info_item" id="info_item_rule">
        <p class="info_title">成都 • 奥迪团购活动说明</p>
        <p class="dotblock">在本活动报名有效期内成功报名的客户，获得秒车团购车特价权；</p>
        <p class="dotblock">活动当天，特价车仅限报名者本人或直系亲属购买，将购车特权转赠他人无效；</p>
        <p class="dotblock">活动当天，每个报名客户仅限购买一辆活动车型；</p>
        <p class="dotblock">活动当天未到店、未订车，购车特价权作废。</p>
        <p class="dotblock">本活动免费报名，新浪秒车不收取任何费用。</p>
        <p class="dotblock">参团免费抽好礼！</p>
        <p class="mom">注：活动最终解释权，归新浪秒车所有。咨询客服 4000-970-970</p>
        </div>
                        
        <div class="info_item">
        <p class="info_title">新浪秒车，新浪网打造业界领先的专业汽车营销服务平台</p>
        <p class="dotblock">秒车团 • 成都热门团购：成都 • 奥迪团购、成都 • 东风日产团购、成都 • 一汽大众团购、成都 • 广汽传祺团购、成都 • 宝马团购、成都 • 一汽丰田团购、成都 • 奔驰团购、成都 • 北京现代团购、成都 • 雷克萨斯团购、成都 • 沃尔沃团购、成都 • 雪佛兰团购、成都 • 斯柯达团购、成都 • 上海大众团购、成都 • 广汽本田团购、成都 • 雪铁龙团购、成都 • 东风标致团购、成都 • 广汽丰田团购、成都 • 别克团购、成都 • 东风悦达起亚团购、成都 • 英菲尼迪团购、成都 • 广汽三菱团购、成都 • Jeep团购、成都 • 长安福特团购</p>
        <p class="dotblock">成都 • 奥迪团购活动火热进行中，车型：奥迪A4L、奥迪A6L、奥迪Q3、奥迪Q5、奥迪A3、奥迪Q7、奥迪A1、奥迪A3-进口、奥迪A4-进口、奥迪A5、奥迪A7、奥迪TT、奥迪A8L</p>
        <p class="dotblock">成都 • 奥迪团购活动购买方式：分期置换、分期、置换、全款</p>
        <p class="dotblock">新浪信誉保证，真实低价。</p>
        </div>

        @include("detail/baomin")       
    </div>

    @include("detail/right")
</div>

    



@include("public/footer")
<script type="text/javascript" charset="utf-8" src="./js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" charset="utf-8" src="./js/jquery.lazyload.min.js"></script>
<script type="text/javascript" charset="utf-8" src="./js/common.js"></script>
<script type="text/javascript" charset="utf-8" src="./js/list.js"></script>
