<?php

namespace app\admin\controller;

/*
后台基础控制器
所有后台控制器，都应该作为它的子类存在
*/

class Base extends \think\Controller{

    /*
     * thinkphp自定义的构造函数，功能等同于__construct*/
    function initialize()
    {
        $admin_id = \think\facade\Session::get('admin_id');
        if ( !$admin_id ){
            return $this->error('当前页面需要登陆', url('admin/login/index'));
        }
        $user = new \app\common\model\AdminUser();
        $user = $user->where('id', $admin_id)->find();
        if( !$user ){
            return $this->error('当前页面需要登陆', url('admin/login/index'));
        }

        $this->assign('user', $user);
    }
}