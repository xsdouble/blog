<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 10:08
 */

namespace app\admin\controller;


class Admin extends Error
{
    //加载显示页
    public function index()
    {
        //从数据库加载admin数据，只显示3个就分页
        $data = db('admin')->paginate(3);
        //分配到模板
        $this->assign('data', $data);
        return $this->fetch('admin/list');
    }

    //添加管理员
    public function add()
    {
        if (request()->isPost()) {
            $data = [
                'username' => input('username'),
                'password' => input('password'),
            ];
            //验证信息
            $validate = validate('Admin');
            if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }
            $data['password'] = md5(input('password'));
            //修改数据库
            $res = db('admin')->insert($data);
            if ($res) {
                return $this->success('恭喜添加成功！', 'Admin/index');
            } else {
                return $this->error('添加失败！');
            }
        }
        return $this->fetch();
    }

    //删除管理员
    public function del()
    {
        $id = input('id');
        if ($id == '1') {
            return $this->error('初始化管理员无法删除');
        }
        $res = db('admin')->delete($id);
        if ($res) {
            return $this->success('恭喜删除成功！', 'Admin/index');
        } else {
            return $this->error('删除失败！');
        }
    }

    //编辑管理员
    public function edit()
    {
        $id = input('id');
        $data = db('admin')->find($id);
        $this->assign('data', $data);
        $zt = input('zt');
        if (request()->isPost()) {
            $date = [
                'id' => input('id'),
                'username' => input('username'),
                'password' => input('password'),
            ];
            if ($zt == 'on') {
                $date['zt'] = '1';
            } else {
                $date['zt'] = '';
            }
            //验证信息
            $validate = validate('Admin');
            if (!$validate->scene('edit')->check($date)) {
                return $this->error($validate->getError());
            }
            $date['password'] = md5(input('password'));
            $date['zt'] = '1';
            //修改数据库
            $res = db('admin')->update($date);
            if ($res !== false) {
                return $this->success('恭喜修改成功！', 'Admin/index');
            } else {
                return $this->error('修改失败！');
            }
        }

        return $this->fetch();
    }

    //冻结操作
    public function dongjie()
    {
        $id = input('id');
        $zt = input('zt');
        $data = [
            'id' => $id,
            'zt' => $zt,
        ];
        db('admin')->update($data);
        $date = db('admin')->field('zt')->find($id);
        if ($date['zt'] == 1) {
            return $this->success('冻结成功', 'Admin/index');
        } else {
            return $this->error('解除成功', 'Admin/index');
        }
    }

}