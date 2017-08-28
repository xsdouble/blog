<?php
namespace app\index\controller;

use app\index\widget\Blog;

class Index extends Blog
{
    public function index()
    {
        //查询所有文章
        $date = db('article')->field('id,title,keywords,time,desc,pic')->paginate(2);
        $this->assign('date',$date);
        return $this->fetch();
    }
}
