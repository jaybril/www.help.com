<!DOCTYPE html>
<html>
<head>
    <title>在中国</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" type="image/ico" href="" />
    <link rel="stylesheet" href="../../assets/css/com/com.css">
    <link rel="stylesheet" href="../../assets/css/com/ext.css">
    <link rel="stylesheet" href="../../assets/css/at/at.css">
    <!-- 本地测试调用 -->
    <script src="../test.js"></script>
    <!-- 本地测试调用 -->
</head>

<body>
<script>mod_header();mod_nav()</script>

<div class="top_banner"></div>

<div class="content_pg layout1190">
    <div class="tit"><img src="../../assets/images/at/s.png"></div>
    <dl class="dl">
        <dt>机场：</dt>
        <dd>
            <a class="d_a d_1_1" data-id="1_1" href="javascript:void(0)"></a>
            <a class="d_a d_1_2" data-id="1_2" href="javascript:void(0)"></a>
        </dd>
    </dl>
    <dl class="dl">
        <dt>铁路：</dt>
        <dd>
            <a class="d_a d_2_1" href="javascript:void(0)"></a>
            <a class="d_a d_2_2" href="javascript:void(0)"></a>
            <a class="d_a d_2_3" href="javascript:void(0)"></a>
            <a class="d_a d_2_4" href="javascript:void(0)"></a>
        </dd>
    </dl>
    <dl class="dl">
        <dt>购物中心：</dt>
        <dd>
            <a class="d_a d_3_1" href="javascript:void(0)"></a>
            <a class="d_a d_3_2" href="javascript:void(0)"></a>
            <a class="d_a d_3_3" href="javascript:void(0)"></a>
            <a class="d_a d_3_4" href="javascript:void(0)"></a>
            <a class="d_a d_3_5" href="javascript:void(0)"></a>
            <a class="d_a d_3_6" href="javascript:void(0)"></a>
            <a class="d_a d_3_7" href="javascript:void(0)"></a>
            <a class="d_a d_3_8" href="javascript:void(0)"></a>
            <a class="d_a d_3_9" href="javascript:void(0)"></a>
            <a class="d_a d_3_10" href="javascript:void(0)"></a>
            <a class="d_a d_3_11" href="javascript:void(0)"></a>
            <a class="d_a d_3_12" href="javascript:void(0)"></a>
            <a class="d_a d_3_13" href="javascript:void(0)"></a>
            <a class="d_a d_3_14" href="javascript:void(0)"></a>
            <a class="d_a d_3_15" href="javascript:void(0)"></a>
            <a class="d_a d_3_16" href="javascript:void(0)"></a>
            <a class="d_a d_3_17" href="javascript:void(0)"></a>
            <a class="d_a d_3_18" href="javascript:void(0)"></a>
            <a class="d_a d_3_19" href="javascript:void(0)"></a>
            <a class="d_a d_3_20" href="javascript:void(0)"></a>
        </dd>
    </dl>
    <dl class="dl">
        <dt>企事业单位：</dt>
        <dd>
            <a class="d_a d_4_1" href="javascript:void(0)"></a>
            <a class="d_a d_4_2" href="javascript:void(0)"></a>
        </dd>
    </dl>
    <dl class="dl">
        <dt>医院：</dt>
        <dd>
            <a class="d_a d_5_1" href="javascript:void(0)"></a>
        </dd>
    </dl>
    <dl class="dl">
        <dt>高尔夫球场：</dt>
        <dd>
            <a class="d_a d_6_1" href="javascript:void(0)"></a>
        </dd>
    </dl>
    <dl class="dl">
        <dt>会展中心：</dt>
        <dd>
            <a class="d_a d_7_1" href="javascript:void(0)"></a>
        </dd>
    </dl>
</div>



<script>
    var config = {
        logoAjax: "suc.json"
    }
</script>
<script id="layer_open" type="text/html">
    <div class="layer_open">
        <div class="logo_main">
            <div class="left_meun">
                <% for(i = 0; i < item.length; i ++) {%>
                <a href="javascript:void(0)"><%= item[i].name %></a>
                <% } %>
            </div>
            <!-- 画册位置 -->
            <div class="gallery_wp">

            </div>
        </div>
    </div>
</script>

<script id="center_bd" type="text/html">
    <div class="center_bd">
        <div class="swiper-container gallery">
            <div class="swiper-wrapper">
                <% for(i = 0; i < pic.length; i ++) {%>
                <div class="swiper-slide">
                    <img src="<%= pic[i] %>" />
                </div>
                <% } %>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="close"></div>
    </div>
</script>

<script>mod_cz();mod_footer();mod_cpy();</script>
<script src="../../assets/js/source/jquery/jquery.min.js"></script>
<script src="../../assets/js/source/layer/layer.js"></script>
<script src="../../assets/js/com/global.js"></script>
<script src="../../assets/js/at/at.js"></script>

</body>
</html>
