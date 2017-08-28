<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 10:21
 */
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
//    验证规则
    protected $rule = [
        'username' => 'require|max:25|min:4|unique:admin',
        'password' => 'require|min:6',
    ];
//    错误信息验证
    protected $message = [
        'username.require' => '用户名不能为空',
        'username.max' => '名称最多不能超过25个字符',
        'username.min' => '名称最少不能少于4个字符',
        'username.unique' => '用户名已存在',
        'password.min' => '密码长度不能少于6',
    ];
//    验证场景
    protected $scene = [
        'add'=>['username','password'],
        'edit'=>['username','password'],
    ];
}