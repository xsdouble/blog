<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 10:21
 */
namespace app\admin\validate;
use think\Validate;

class Cate extends Validate
{
//    验证规则
    protected $rule = [
        'catename' => 'require|max:25|unique:cate',
    ];
//    错误信息验证
    protected $message = [
        'catename.require' => '栏目名称不能为空',
        'catename.max' => '名称最多不能超过25个字符',
        'catename.unique' => '栏目名称已存在',
    ];
//    验证场景
    protected $scene = [
        'add'=>['catename'],
        'edit'=>['catename'],
    ];
}