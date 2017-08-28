<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 11:47
 */
namespace app\admin\validate;
use think\Validate;

class Article extends Validate
{
//    验证规则
    protected $rule = [
        'title' => 'require|unique:Article',
        'cateid' => 'require',
        'author'=>'require'
    ];
//    错误信息验证
    protected $message = [
        'title.require' => '文章名称不能为空',
        'cateid.require' => '栏目不能为空',
        'author.require' => '作者名称不能为空',
        'title.unique' => '用户名已存在',

    ];
//    验证场景
    protected $scene = [
        'add'=>['title','cateid','author'],
        'edit'=>['title','cateid','author'],
    ];
}