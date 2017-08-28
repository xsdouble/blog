<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 13:37
 */
namespace app\admin\validate;
use think\Validate;

class Login extends Validate
{
//    验证规则
    protected $rule = [
        'username' => 'require|max:25|min:4',
        'password' => 'require',
        'code'=>'require',
    ];
//    错误信息验证
    protected $message = [
        'username.require' => '账号不能为空',
        'password.require' => '密码不能为空',
        'code.require' => '验证码不能为空',
        'username.max' => '名称最多不能超过25个字符',
        'username.min' => '名称最少不能少于4个字符',
    ];
//    验证场景
    protected $scene = [
        'add'=>['username','password','code'],
        'edit'=>['username','password','code'],
    ];
}