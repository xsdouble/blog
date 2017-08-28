<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:105:"D:\20170717workspace\UPUPW\UPUPW_NP7.0\htdocs\project\public/../application/index\view\common\header.html";i:1503731887;}*/ ?>
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