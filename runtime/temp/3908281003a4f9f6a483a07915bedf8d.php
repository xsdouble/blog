<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:104:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/index\view\common\right.html";i:1503732008;}*/ ?>
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