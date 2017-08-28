<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 11:21
 */

namespace app\admin\controller;


class Article extends Error
{
    //加载显示页面
    public function index()
    {
        //联表查询
        $data = db('article')
            ->alias('a')
            ->field('a.id,a.title,a.keywords,a.desc,a.author,a.time,a.click,a.pic,a.state,c.catename')
            ->join('cate c','a.cateid=c.id','LEFT')
            ->paginate(3);
        //分配模板变量
        $this->assign('data', $data);
        return $this->fetch('list');
    }

    //添加文章
    public function add()
    {
        if (request()->isPost()) {
            $data = [
                'title' => input('title'),
                'cateid' => input('cateid'),
                'keywords' => input('keywords'),
                'desc' => input('desc'),
                'author' => input('author'),
                'content' => input('content'),
                'time' => time(),
            ];
            if (input('state') == 'on') {
                $data['state'] = '1';
            } else {
                $data['state'] = '0';
            }
            //验证信息
            $validate = validate('Article');
            if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }
            if($_FILES['file']['tmp_name']) {
                // 获取表单上传文件 例如上传了001.jpg
                $file = request()->file('file');
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $type = $info->getExtension();
                    if (!in_array($type, ['gif', 'jpg', 'jpeg', 'bmp', 'png', 'swf'])) {
                        return $this->error('请上传正确的图片');
                    }
                    $filename = '/uploads/' . $info->getSaveName();
                    $filename = str_replace('\\', '/', $filename);
                    //把图片名称放在data数组里
                    $data['pic'] = $filename;
                } else {
                    // 上传失败获取错误信息
                    return $this->error($file->getError());
                }
            }
            //添加数据库
            $res = db('article')->insert($data);
            if ($res) {
                return $this->success('恭喜添加成功！', 'Article/index');
            } else {
                return $this->error('添加失败！');
            }
        }

        //查询所有栏目
        $cate = db('cate')->select();
        $this->assign('cate', $cate);
        return $this->fetch();
    }
    //删除
    public function del(){
        $id = input('id');
        $image = db('article')->field('pic')->find($id);
        $img=$image['pic'];
        $res = db('article')->delete($id);
        if ($res) {
            @unlink('.'.$img);
            return $this->success('恭喜删除成功！', 'Article/index');
        } else {
            return $this->error('删除失败！');
        }

    }
    //编辑
    public function edit(){
        $id = input('id');
        $data = db('article')->find($id);
        $this->assign('data',$data);
        if (request()->isPost()) {
            $data = [
                'id'=>$id,
                'title' => input('title'),
                'cateid' => input('cateid'),
                'keywords' => input('keywords'),
                'desc' => input('desc'),
                'author' => input('author'),
                'content' => input('content'),
                'time' => time(),
            ];
            if (input('state') == 'on') {
                $data['state'] = '1';
            } else {
                $data['state'] = '0';
            }
            //验证信息
            $validate = validate('Article');
            if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }
            if($_FILES['file']['tmp_name']) {
                // 获取表单上传文件 例如上传了001.jpg
                $file = request()->file('file');
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $type = $info->getExtension();
                    if (!in_array($type, ['gif', 'jpg', 'jpeg', 'bmp', 'png', 'swf'])) {
                        return $this->error('请上传正确的图片');
                    }
                    $filename = '/uploads/' . $info->getSaveName();
                    $filename = str_replace('\\', '/', $filename);
                    //把图片名称放在data数组里
                    $data['pic'] = $filename;
                } else {
                    // 上传失败获取错误信息
                    return $this->error($file->getError());
                }
            }
            $image = db('article')->field('pic')->find($data['id']);
            $img=$image['pic'];
            //添加数据库
            $res = db('article')->update($data);
            if ($res) {
                if(isset($data['pic']) && $data['pic']){
                    @unlink('.'.$img);
                }
                return $this->success('恭喜修改成功！', 'Article/index');
            } else {
                return $this->error('修改失败！');
            }
        }

        //查询所有栏目
        $cate = db('cate')->select();
        $this->assign('cate', $cate);
        return $this->fetch();
    }
}