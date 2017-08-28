<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:103:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/index\view\index\index.html";i:1503730527;}*/ ?>
<?php echo widget('Blog/header'); ?>

<!--顶部通栏-->


<div class="position"></div>

<div class="overall">

    <div class="left">
        <?php foreach($date as $v): ?>
        <div class="xnews2">
            <div class="pic">
                <a target="_blank" href="<?php echo url('Lists/index'); ?>">
                    <img src="<?php echo $v['pic']; ?>" alt="<?php echo $v['title']; ?>"/>
                </a>
            </div>
            <div class="dec">
                <h3><a target="_blank" href="<?php echo url('Lists/index'); ?>"><?php echo $v['title']; ?></a></h3>
                <div class="time">发布时间：<?php echo date('Y-m-d H:i:s',$v['time']); ?></div>
                <p><?php echo $v['desc']; ?></p>
                <?php
                    $keywords=$v['keywords'];
                    $keywords=explode(' ',$keywords);
                ?>
                <div class="time">
                    <?php foreach($keywords as $c): ?>
                    <a href="<?php echo url('Lists/index',['keywords'=>$c]); ?>"><?php echo $c; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="pages">
            <div class="plist">
                <?php echo $date->render(); ?>
            </div>
        </div>
    </div>


    <?php echo widget('Blog/right'); ?>

</div>


<div class="footerd">
    <ul>
        <li>Copyright &#169; 2008-2016 all rights reserved 版权所有
            <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li>
    </ul>
</div>

<div style="display:none;">
    <script src='__STATIC__/index/goto/my-65537.js' language='javascript'></script>
    <script src="__STATIC__/index/images/js/count_zixun.js" language="JavaScript"></script>
</div>

</body>
</html>