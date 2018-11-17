<?php

namespace app\admin\controller;
/*
后台基础控制器
所有后台控制器，都应该作为它的子类存在
*/
class Base extends \think\Controller{
    function initialize()
    {
        $admin_id = \think\facade\Session::get('admin_id');
        if(!$admin_id){
            return $this->error('当前页面需要登陆', url('admin/login/index'));
        };//验证session写入是否成功。
        $user = new \app\common\model\AdminUser();//实例化一个数据库模型
        // var_dump($user);
    
        $user = $user->where('id', $admin_id)->find();//取得用户名
        // var_dump($user);
        if(!$user){
            return $this->error('当前页面需要登陆', url('admin/login/index'));
        }
      
        //赋值类属性，方便子控制器调用
        $this->user = $user;
        
        $this->assign('user', $user);
        $this->assign('webname', setting('webname'));
    }
}