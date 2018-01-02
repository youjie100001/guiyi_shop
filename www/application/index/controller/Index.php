<?php
namespace app\index\controller;
class Index
{
    /*
     * 后台首页
     * */
    public function index()
    {
        return view('/index');
    }
    public function add()
    {
        return view('/add');
    }
    public function adv()
    {
        return view('/adv');
    }
    public function book()
    {
        return view('/book');
    }
    public function cate()
    {
        return view('/cate');
    }
    public function cateedit()
    {
        return view('/cateedit');
    }
    public function column()
    {
        return view('/column');
    }
    public function info()
    {
        return view('/info');
    }
    public function lists()
    {
        return view('/list');
    }
    public function login()
    {
        return view('/login');
    }
    public function page()
    {
        return view('/page');
    }
    public function pass()
    {
        return view('/pass');
    }
    public function tips()
    {
        return view('/tips');
    }
}
