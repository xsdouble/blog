<?php
/**
 * Created by PhpStorm.
 * User: 伟强
 * Date: 2017/8/26
 * Time: 14:55
 */
namespace app\index\controller;

use app\index\widget\Blog;

class Lists extends Blog{
    //加载显示页面
    public function index(){
        $id = input('id');
        //查询所有栏目
        $cate = db('cate')->field('catename')->find($id);
        //分配变量
        if(isset($id)&&$id){
            //查询所有文章
            $articleD=db('article')->where(['cateid'=>$id])->field('id,title,keywords,time,desc,pic')->paginate(8);
        }
        $keywords=input('keywords');
        if (isset($keywords) && $keywords){
            $ma['keywords'] = ['like','%'.$keywords.'%'];
            $articleD=db('article')->where($ma)->field('id,title,keywords,time,desc,pic')->paginate(8);
        }
        $this->assign('cate',$cate);
        $this->assign('articleD',$articleD);
        $this->assign('keywords',$keywords);
        return $this->fetch();
    }
    //
    public function search(){
        $id = input('id');
        //获取搜索框的数值
        $keywords=input('key');
        //与数据库的标签和文章题目进行筛选
        $key['keywords'] = ['like','%'.$keywords.'%'];
        $key1['title'] = ['like','%'.$keywords.'%'];
        $arr=[
            'query'=>[
                'key'=>$keywords,
            ],
        ];
        //获取数据
        $articleD=db('article')->where($key)->whereOr($key1)->field('id,title,keywords,time,desc,pic,cateid')->paginate(2,false,$arr);
        //获取栏目的名字
        $cate = db('cate')->field('catename')->find($id);
        //分配到模板
        $this->assign('articleD',$articleD);
        $this->assign('cate',$cate);
        //标签显示
        $this->assign('keywords',$keywords);
        return $this->fetch('index');
    }
}