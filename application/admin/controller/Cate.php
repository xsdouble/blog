<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 11:03
 */
namespace app\admin\controller;


class Cate extends Error {
    //加载显示页面
    public function index(){
        //读取cate数据库数据,每页显示3个
        $data = db('cate')->paginate(9);
        //分配模板变量
        $this->assign('data',$data);
        return $this->fetch('cate/list');
    }
    //添加栏目
    public function add(){
        if (request()->isPost()){
            $data = [
                'catename'=>input('catename'),
            ];
            //验证信息
            $validate=validate('Cate');
            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
            $res = db('cate')->insert($data);
            if ($res){
                return $this->success('恭喜添加成功！','Cate/index');
            }else{
                return $this->error('添加失败！');
            }
        }
        return $this->fetch();
    }
    //删除
    public function del(){
        $id = input('id');
        $res=db('cate')->delete($id);
        if ($res){
            return $this->success('恭喜删除成功！','Cate/index');
        }else{
            return $this->error('删除失败！');
        }
    }
    //编辑
    public function edit(){
        $id = input('id');
        $data = db('cate')->find($id);
        $this->assign('data',$data);
        if (request()->isPost()){
            $data = [
                'id'=>$id,
                'catename'=>input('catename'),
            ];
            //验证信息
            $validate=validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                return $this->error($validate->getError());
            }
            $res = db('cate')->update($data);
            if ($res !==false){
                return $this->success('恭喜修改成功！','Cate/index');
            }else{
                return $this->error('添加失败！');
            }
        }
        return $this->fetch();
    }
}