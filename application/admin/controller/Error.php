<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 16:46
 */
namespace app\admin\controller;

use think\Controller;
//空控制器
class Error extends Controller
{
    //空操作
    public function _empty()
    {
        return $this->fetch('common/404');
    }
    //初始化
    public function _initialize(){
        //加载父类
        parent::_initialize();
        $this->allow();
    }
    //登录权限
    public function allow(){
        $go=session('admin');
        if (!isset($go)){
            return $this->error('请先登录','Login/index');
        }
    }
}