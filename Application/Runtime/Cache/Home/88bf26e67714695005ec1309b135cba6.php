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
<script type="text/javascript">
    var wzurl = '<?php echo U("Home/BookRetrieval/wz");?>';
</script>
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
            <h3>图书检索</h3>
        </div>

        <p>我们为您找到了<?php echo ($count); ?>条记录</p>

        <?php if(is_array($books)): foreach($books as $key=>$v): ?><div class="weui-form-preview" id="<?php echo ($v["RowNo"]); ?>">
                <div class="weui-form-preview__bd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">书名</label>
                        <span class="weui-form-preview__value"><?php echo ($v["Title"]); ?></span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">作者</label>
                        <span class="weui-form-preview__value"><?php echo ($v["Author"]); ?></span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">出版社</label>
                        <span class="weui-form-preview__value"><?php echo ($v["Publish"]); ?></span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">ISBN</label>
                        <span class="weui-form-preview__value"><?php echo ($v["Isbn"]); ?></span>
                    </div>
                </div>
                <div class="weui-form-preview__ft">
                    <button type="submit" name="<?php echo ($v["CtrlRd"]); ?>" value="<?php echo ($v["Title"]); ?>" class="weui-form-preview__btn weui-form-preview__btn_primary wz" href="javascript:" data-am-modal="{target: '#my-popup'}">查看详情</button>
                </div>
            </div>
            <br><?php endforeach; endif; ?>
    </div>
    <br>



    <div class="am-popup" id="my-popup">
        <div class="am-popup-inner">
            <div class="am-popup-hd">
                <h4 class="am-popup-title" id="bookname"></h4>
                <span data-am-modal-close
                      class="am-close">&times;</span>
            </div>
            <div class="am-popup-bd" id="booklist">

            </div>
        </div>
    </div>




    <script type="text/javascript" src="/Public/Js/function/booksearch.js"></script>

    <!-- footer start -->
    
<div class="weui-footer weui-footer_fixed-bottom">
    <span class="weui-footer__links">
        <a href='<?php echo U("Home/Index/index");?>' class="weui-footer__link">湘农青年网-校园服务</a>
    </span>
    <br>
    <span class="weui-footer__text">Copyright © 2008-2017 xnqn.com</span>
</div>
</div>
<!--使用微信JS-SDK隐藏菜单-->
<script>
 //对浏览器的UserAgent进行正则匹配，不含微信独有标识的为其它浏览器
   var useragent = navigator.userAgent;
    if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
         //这里的警告框会阻止页面断续加载
        alert('请您在微信公众号&#45;&#45;“湘农青年”中访问本页面！');
         //强行关闭页面
        var opened = window.open('about:blank', '_self');
        opened.opener = null;
       opened.close();
    }
</script>
<!--使用微信JS-SDK隐藏菜单-->

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
    <!-- footer end -->