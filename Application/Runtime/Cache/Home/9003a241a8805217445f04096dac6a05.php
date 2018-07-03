<?php if (!defined('THINK_PATH')) exit();?><!-- header start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>校园服务</title>
    <?php if(!empty($xn) || !empty($kb) || !empty($data)): ?><link rel="stylesheet" type="text/css" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css" /><?php endif; ?>
    <!-- 引入 WeUI -->
    <link rel="stylesheet" href="/Public/Css/weui.min.css"/>
    <script type="text/javascript" src="/Public/Js/jquery-3.1.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
    <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?5f67e94e6cd0b00bb260d24c6def7615";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>

<!-- header end -->

<div class="container">
    <div class="page__hd">
        <div id="logopic"></div>
        <div id="introduce">
            <h3>湖南农业大学欢迎你</h3>
            <p>湘农青年&nbsp;校园服务</p>
        </div>
    </div>
    <br>
    <div class="page__bd">
        <div class="bd__header">
            <h3>借阅查询</h3>
        </div>
        <?php if(is_array($books)): foreach($books as $key=>$v): ?><hr>
            <div class="weui-form-preview__bd" style="background: #fff;">
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">商品</label>
                    <span class="weui-form-preview__value"><?php echo ($v["ShuName"]); ?></span>
                </div>
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">借书日期</label>
                    <span class="weui-form-preview__value"><?php echo ($v["jsrq"]); ?></span>
                </div>
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">还书日期</label>
                    <span class="weui-form-preview__value"><?php echo ($v["yhrq"]); ?></span>
                </div>
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">状态</label>
                    <span class="weui-form-preview__value"><?php echo ($v["lx"]); ?></span>
                </div>
                <div class="weui-form-preview__item">
                    <label class="weui-form-preview__label">预付金额</label>
                    <span class="weui-form-preview__value"><?php echo ($v["yfje"]); ?></span>
                </div>
            </div>
            <hr><?php endforeach; endif; ?>
    </div>

    <!-- Footer start -->
    
<div class="weui-footer weui-footer_fixed-bottom">
    <span class="weui-footer__links">
        <a href='<?php echo U("Home/Index/index");?>' class="weui-footer__link">湘农青年网-校园服务</a>
    </span>
    <br>
    <span class="weui-footer__text">Copyright © 2008-2017 xnqn.com</span>
</div>
</div>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5f67e94e6cd0b00bb260d24c6def7615";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
</body>
</html>

    <!-- Footer end -->