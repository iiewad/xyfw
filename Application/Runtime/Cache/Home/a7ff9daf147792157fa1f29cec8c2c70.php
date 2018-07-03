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

<!-- Header End -->
<script type="text/javascript">
    var sentUrl = '<?php echo U("Home/Card/showlist");?>';
    var gsUrl = '<?php echo U("Home/Card/guashi");?>';
    var CardId = '<?php echo ($UserId); ?>';
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
        <form action='<?php echo U("Home/Card/showlist");?>' id="sent_form" method="post">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">卡号</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input"  disabled="disabled" type="number" pattern="[0-9]*" placeholder="<?php echo ($userid); ?>">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label for="" class="weui-label">开始日期</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="date" value="" name="bdate">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label for="" class="weui-label">结束日期</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="date" value="" name="edate">
                </div>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label">交易类型</label>
                </div>
                <div class="weui-cell__bd">
                    <select class="weui-select" name="code">
                        <?php if(is_array($TranItem)): foreach($TranItem as $key=>$v): ?><option value="<?php echo ($v["trancode"]); ?>"><?php echo ($v["tranname"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
            </div>
            <!--<br>-->
            <a href="javascript:;" id="sendform" class="weui-btn weui-btn_primary">查询</a>
        </form>
        <br>

        <a href="javascript:;" class="weui-btn weui-btn_warn" id="gs">挂失</a>
        <br>
        <br>

        <div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">一卡通挂失</div>
                <form action="">
                    <div class="am-modal-bd">
                        涉及挂失，请谨慎操作
                        <input type="text" class="am-modal-prompt-input" name="CardId" value="" id="CardId" disabled>
                        <input type="password" class="am-modal-prompt-input" name="CardPwd" id="CardPwd" placeholder="请输入密码">
                    </div>
                </form>

                <div class="am-modal-footer">
                    <span class="am-modal-btn" data-am-modal-cancel>取消</span>
                    <span class="am-modal-btn" data-am-modal-confirm>提交</span>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function () {
            $('#sendform').on('click', function () {
                checkform();
            });
            function checkform() {
                if ( $('input[name=bdate]').val() == '' ) {
                    alert("请选择开始日期");
                    return;
                }
                if ( $('input[name=bdate]').val() == '' ) {
                    alert("请选择结束日期");
                    return;
                }

                $('#sent_form').submit();
            }
        })();

    </script>
    <script type="text/javascript" src="/Public/Js/function/yikatong_gs.js"></script>
    <script type="text/javascript" src="/Public/Js/weui.min.js"></script>
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