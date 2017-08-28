<?php
namespace app\admin\controller;


class Index extends Error
{
    public function index()
    {
        return $this->fetch();
    }
}
