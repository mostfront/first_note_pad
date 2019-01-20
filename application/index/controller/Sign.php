<?php

namespace app\index\controller;
use app\common\model\User as U;

class Sign extends Base{
    function initialize(){
        parent::initialize();
        $this->assign('tplType', 'one');
    }
    public function index(){
        return view();
    }
    public function up(){
        return view();
    }
    public function up_save(){
        $r = [
            'id' => 0,
            'password' => $this->request->post('password'),
            'username' => $this->request->post('username'),
            'nickname' => $this->request->post('nickname'),
            'phone' => $this->request->post('phone'),
            'email' => $this->request->post('email'),
            'user_status' => setting("reg_status"),
            '__token__' => $this->request->post('__token__'),
        ];

        $u = new U();
        try{
        $u->storage($r);
        }
        catch(\Exception $e){
            return $this->error($e->getMessage());
        }
        return $this->redirect('index/index/index');
    }
    public function in(){
        return view();
    }
    public function in_check(){
        $r['username'] = $this->request->post('username');
        $r['password'] = $this->request->post('password');
        $r['__token__'] = $this->request->post('__token__');
// var_dump($r);
        //数据验证
        $validate = new \app\common\validate\User();
        if( !$validate->scene('login')->check($r) ){
            return $this->error($validate->getError());
        }

        $u = new U;

        $user = $u->where('username', $r['username'])->find();
        if(!$user){
            return $this->error('用户名不存在');
        }

        if( password_verify($r['password'], $user->password) !==true ){
            return $this->error('密码不正确');
        }

        if(($msg = $user->isStatus()) !== true ){
            return $this->error($msg, 'index/sign/in');
        }

        \think\facade\Session::set('id', $user->id);

        return $this->redirect('index/usercenter/index');
    }
    //退出登陆
    public function logout(){
        \think\facade\Session::delete('id');
        return $this->redirect('index/sign/in');
    }

}