<?php if (!defined('THINK_PATH')) exit();?><!-- Header start -->
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

<!-- Footer start -->

<script type="text/javascript">
    var bdate = '<?php echo ($bdate); ?>';
    var edate = '<?php echo ($edate); ?>';
    var Code = '<?php echo ($Code); ?>';
    var pageindex = 0;
    var pageCount = '<?php echo ($pages); ?>';
    var yktUrl = '<?php echo U("Home/Card/getData", '', '');?>';
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
            <h3>一卡通流水</h3>
        </div>
        <div class="bd__main"></div>
        <div class="jymx"></div>
        <br>
        <br>
    </div>

    <!--<div class="weui-loadmore">
        <i class="weui-loading"></i>
        <span class="weui-loadmore__tips">正在加载</span>
    </div>
    <div class="weui-loadmore weui-loadmore_line">
        <span class="weui-loadmore__tips">暂无数据</span>
    </div>
    <div class="weui-loadmore weui-loadmore_line weui-loadmore_dot">
        <span class="weui-loadmore__tips"></span>
    </div>-->
    <br>

    <div class="page__bottom">
        <ul data-am-widget="pagination" class="am-pagination am-pagination-default">

            <li class="am-pagination-first ">
                <a href="javascript:;" class="index_page">首页</a>
            </li>

            <li class="am-pagination-prev ">
                <a href="javascript:;" class="prev_page">上一页</a>
            </li>

            <li class="am-pagination-next ">
                <a href="javascript:;" class="next_page">下一页</a>
            </li>

            <li class="am-pagination-last ">
                <a href="javascript:;" class="last_page">末页</a>
            </li>
        </ul>
    </div>
    </div>

    <!--<script type="text/javascript" src="/Public/Js/weui.min.js"></script>-->
    <script type="text/javascript" src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
    <script type="text/javascript" src="/Public/Js/function/yikatong.js"></script>