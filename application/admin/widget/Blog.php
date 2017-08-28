<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 9:52
 */
namespace app\admin\widget;

use think\Controller;

class Blog extends Controller{
    //空操作
    public function _empty(){
        return $this->fetch('common/404');
    }

    //公共头部文件
    public function header(){
        return $this->fetch('common/header');
    }
    //公共左侧菜单栏
    public function left(){
        return $this->fetch('common/left');
    }




}