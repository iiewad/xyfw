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
    var gjsearchUrl = '<?php echo U("Home/BookRetrieval/wz", '', '');?>';
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
            <h3>电费查询</h3>
        </div>
    </div>

    <div data-am-widget="tabs" class="am-tabs am-tabs-default">
        <ul class="am-tabs-nav am-cf">
            <li class="am-active">
                <a href="[data-tab-panel-0]">快速找书</a>
            </li>
            <li class="">
                <a href="[data-tab-panel-1]">高级检索</a>
            </li>

        </ul>
        <div class="am-tabs-bd">
            <div data-tab-panel-0 class="am-tab-panel am-active">
                <div class="weui-search-bar" id="searchBar">
                    <form class="weui-search-bar__form" action="<?php echo U('Home/BookRetrieval/kscz');?>" method="post">
                        <div class="weui-search-bar__box">
                            <i class="weui-icon-search"></i>
                            <input type="search" name="bname" class="weui-search-bar__input" id="searchInput" placeholder="搜索" required="">
                            <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
                        </div>
                        <label class="weui-search-bar__label" id="searchText" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
                            <i class="weui-icon-search"></i>
                            <span>搜索</span>
                        </label>
                    </form>
                    <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
                </div>

                <ol class="am-breadcrumb">
                    <li>热门搜索</li>
                </ol>
                <!--<div class="am-g" style="text-align: center;">
                    <div class="am-u-sm-4">
                        <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary">按钮</a>
                    </div>
                    <div class="am-u-sm-4">
                        <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary">按钮</a>
                    </div>
                    <div class="am-u-sm-4">
                        <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary">按钮</a>
                    </div>
                </div>-->
            </div>

                <div data-tab-panel-1 class="am-tab-panel ">
                    <form id="js_form" action='<?php echo U("Home/BookRetrieval/gjjs");?>' method="post">
                        <div class="weui-cell">
                            <div class="weui-cell__bd">
                                <input class="weui-input" name="bookname" type="text" placeholder="请输入书目名称">
                            </div>
                        </div>
                        <div class="weui-cell">
                            <div class="weui-cell__bd">
                                <input class="weui-input" name="bauthor" type="text" placeholder="作者">
                            </div>
                        </div>
                        <div class="weui-cell">
                            <div class="weui-cell__bd">
                                <input class="weui-input" name="bpublish" type="text" placeholder="出版社">
                            </div>
                        </div>
                        <br>
                        <a href="javascript:document:js_form.submit()" class="weui-btn weui-btn_plain-primary" >检索</a>
                    </form>
                </div>

        </div>
    </div>

    <!-- footer start -->
    
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

    <!-- footer end -->
    <script type="text/javascript" src="/Public/Js/function/gjsearch.js"></script>
    <script type="text/javascript" class="searchbar js_show">
        $(function(){
            var $searchBar = $('#searchBar'),
                    $searchResult = $('#searchResult'),
                    $searchText = $('#searchText'),
                    $searchInput = $('#searchInput'),
                    $searchClear = $('#searchClear'),
                    $searchCancel = $('#searchCancel');

            function hideSearchResult(){
                $searchResult.hide();
                $searchInput.val('');
            }
            function cancelSearch(){
                hideSearchResult();
                $searchBar.removeClass('weui-search-bar_focusing');
                $searchText.show();
            }

            $searchText.on('click', function(){
                $searchBar.addClass('weui-search-bar_focusing');
                $searchInput.focus();
            });
            $searchInput
                    .on('blur', function () {
                        if(!this.value.length) cancelSearch();
                    })
                    .on('input', function(){
                        if(this.value.length) {
                            $searchResult.show();
                        } else {
                            $searchResult.hide();
                        }
                    })
            ;
            $searchClear.on('click', function(){
                hideSearchResult();
                $searchInput.focus();
            });
            $searchCancel.on('click', function(){
                cancelSearch();
                $searchInput.blur();
            });
        });
    </script>