<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 13:23
 */
namespace app\admin\controller;

use think\Controller;

class Login extends Controller {
    //空操作
    public function _empty(){
        return $this->fetch('common/404');
    }
    //加载显示页面
    public function index(){

        return $this->fetch();
    }
    //登录
    public function login(){
        //获取数据库登录信息
        $date = db('admin')->select();
        if (request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>input('password'),
                'code'=>input('code'),
            ];
            //验证信息
            $validate=validate('Login');
            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
            //判断验证码
            if($data['code']==''){
                return $this->error('验证码不能为空');
            }
            if(!captcha_check($data['code'])){
                return $this->error('验证码错误');
            }
            //判断账号和密码
            if($data['username']==''){
                return $this->error('账号不能为空');
            }
            if($data['password']==''){
                return $this->error('密码不能为空');
            }
            //验证用户和密码
            $res = db('admin')->where(['username'=>$data['username']])->whereOr(['password'=>$data['password']])->find();
            if ($res){
                if($res['zt']=='1'){
                    return $this->error('账号已冻结，请联系管理员！');
                }else{
                    session('admin',$res);
                    return $this->success('恭喜登录成功！','Admin/index');
                }

            }else{
                return $this->error('登录失败！');
            }
        }
    }
    //退出登录
    public function outLogin(){
        session('admin',null);
        return $this->redirect('Login/index');

    }
}