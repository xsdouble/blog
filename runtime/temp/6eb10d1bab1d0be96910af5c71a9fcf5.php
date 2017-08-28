<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:103:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/index\view\lists\index.html";i:1503732158;s:105:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/index\view\common\header.html";i:1503731887;s:104:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/index\view\common\right.html";i:1503732008;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="童老师ThinkPHP交流群：484519446"/>
    <meta name="description" content="童老师ThinkPHP交流群：484519446"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link href="__STATIC__/index/style/lady.css" type="text/css" rel="stylesheet"/>
    <script type='text/javascript' src='__STATIC__/index/style/ismobile.js'></script>
</head>

<body>

<div class="ladytop">
    <div class="nav">
        <div class="left"><a href=""><img src="__STATIC__/index/images/hunshang.png" alt="wed114婚尚"></a></div>
        <div class="right">
            <div class="box">
                <a href="<?php echo url('Index/index'); ?>" >首页</a>
                <?php foreach($cateDate as $v): ?>
                <a href="<?php echo url('Lists/index',['id'=>$v['id']]); ?>" rel='dropmenu209'><?php echo $v['catename']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="hotmenu">
    <div class="con">热门标签：<a href='qiwenqushi/'>奇闻趣事</a> <a href=''>生活妙招</a> <a href='xingzuo/'>星座</a> <a href='qinzi/'>亲子</a>
        <a href='qiche/'>汽车</a> <a href='chongwubaike/'>宠物百科</a> <a href='jiaji/'>家居</a></div>
</div>

<!--顶部通栏-->


<div class="position">
    <?php if(isset($keywords)): ?>
    关键字 > <spn><?php echo $keywords; ?></spn>
    <?php else: ?>
    <a href='<?php echo url("Index/index"); ?>'>主页</a>
    >
    <a href=''><?php echo $cate['catename']; ?></a>
    >
    <?php endif; ?>
</div>

<div class="overall">

    <div class="left">
        <?php foreach($articleD as $v): ?>
        <div class="xnews2">
            <div class="pic">
                <a target="_blank" href="<?php echo url('Article/index',['id'=>$v['id']]); ?>">
                    <img src="<?php echo $v['pic']; ?>" width="230" height="230" alt="<?php echo $v['title']; ?>"/>
                </a>
            </div>
            <div class="dec">
                <h3><a target="_blank" href="<?php echo url('Article/index',['id'=>$v['id']]); ?>"><?php echo $v['title']; ?></a></h3>
                <div class="time">发布时间：<?php echo date("Y-m-d H:i:s",$v['time']); ?></div>
                <p><?php echo $v['desc']; ?></p>
                <?php
                    $keywords=$v['keywords'];
                    $keywords=explode(' ',$keywords);
                ?>
                <!--//标签-->
                <div class="time">
                    <?php foreach($keywords as $val): ?>
                    <a href="<?php echo url('Lists/index',['keywords'=>$val]); ?>"><?php echo $val; ?></a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
        <?php endforeach; ?>
        <div class="pages">
            <div class="plist">
                <?php echo $articleD->render(); ?>
            </div>
        </div>
    </div>

    <div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div class="hm-t-container" style="width: 298px;">
                <div class="hm-t-main">
                    <div class="hm-t-header">热门点击</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img hotClick">
                            <?php foreach($hotClick as $v): ?>
                            <li class="hm-t-item hm-t-item-img">
                                <a data-pos="0" title="<?php echo $v['title']; ?>" target="_blank"
                                   href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html"
                                   class="hm-t-img-title"
                                   style="visibility: visible;">
                                    <span><?php echo $v['title']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div style="width: 298px;height:180px;" class="hm-t-container">
                <div class="hm-t-main">
                    <div class="hm-t-header">推荐阅读</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img read">
                            <?php foreach($read as $c): ?>
                            <li class="hm-t-item hm-t-item-img">
                                <a style="visibility: visible;" class="hm-t-img-title"
                                   href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html"
                                   target="_blank"
                                   title="<?php echo $c['title']; ?>"
                                   data-pos="0">
                                    <span><?php echo $c['title']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>

    <div id="bdcs">
        <div class="bdcs-container">
            <meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->
            <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
                <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
                    <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="post" action="<?php echo url('Lists/search'); ?>">
                        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="key" autocomplete="off" style="line-height: 30px; width:220px;">
                        <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
                    </form>
                </div>
                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
                    <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
                </div>
            </div>
        </div>
    </div>

    <div style="height:15px"></div>


</div>
<script src="__STATIC__/index/style/jquery-3.2.1.min.js"></script>
<script>
    $(function () {
        var count=0;
        var count1=0;
        var num=$('.hotClick li').length;
        var num1=$('.read li').length;
        function show() {
            count=count% num;
            count1=count1% num1;
            //热门点击，中间内容上移
            $('.hotClick li').animate({'top':'-37px'},1000,
                function () {
                    count++;
                    //只要运行中执行一次即可
                    if(count % num == 0){
                        $('.hotClick li:first').stop().appendTo('.hotClick');
                        $('.hotClick li').css({'top':'0px'});
                    }
                });
            //推荐阅读
            $('.read li').animate({'top':'-37px'},1000,
                function () {
                    count1++;
                    if(count1 % num1 == 0){
                        $('.read li:first').stop().appendTo('.read');
                        $('.read li').css({'top':'0px'});
                    }
                });
        };
        test=setInterval(show,2000);
    })
</script>

</div>
<div class="footerd">
    <ul>
        <li>Copyright &#169; 2008-2016 all rights reserved 版权所有 <a href="http://www.miibeian.gov.cn" target="_blank"
                                                                   rel="nofollow">蜀icp备08107937号</a></li>
    </ul>
</div>

<div style="display:none;">
    <script src='goto/my-65537.js' language='javascript'></script>
    <script src="images/js/count_zixun.js" language="JavaScript"></script>
</div>

</body>
</html>