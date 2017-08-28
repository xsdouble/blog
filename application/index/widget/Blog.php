<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 14:12
 */
namespace app\index\widget;

use think\Controller;

class Blog extends Controller{

    //头部公共部分
    public function header(){
        return $this->fetch('common/header');
    }
    //右侧公共部分
    public function right(){
        return $this->fetch('common/right');
    }
    //右边广告公共部分
    public function rAdever(){

    }
    //底部公共部分
    public function footAdever(){

    }
    //初始化
    public function _initialize(){
        //加载父类
        parent::_initialize();
        //栏目
        $cateDate = $this->cateDate();
        $this->assign('cateDate',$cateDate);
        //热门点击
        $hotClick=$this->hotClick();
        $this->assign('hotClick',$hotClick);
        //推荐阅读
        $read=$this->read();
        $this->assign('read',$read);
    }
    //获取所有栏目
    public function cateDate(){
        $cateD=db('cate')->select();
        return $cateD;
    }
    //热门点击
    public function hotClick(){
        $ht =db('article')->field('id,title')->order('click','desc')->select();
        return $ht;
    }
    //推荐阅读
    public function read(){
        $read =db('article')->field('id,title')->order('id','desc')->select();
        return $read;
    }
}