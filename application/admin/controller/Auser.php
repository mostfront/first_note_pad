<?php

namespace app\admin\controller;

use app\common\model\AdminUser as AU;

class Auser extends Base{
    public function index(){
        $au = new AU();
        $auData = $au->order('id', 'asc')->select();
// var_dump($auData);
        $data = [
            'auData' => $auData,
        ];
// var_dump($data);
        return view(null, $data);
    }

    //添加和修改用户
    public function save(){
        $r = [
            'username' => $this->request->post('username'),
            'password' => $this->request->post('password'),
            '__token__' => $this->request->post('__token__'),
            'id' => $this->request->post('id'),
        ];
        // var_dump($r);exit();

        //插入数据
        $au = new AU();

        $au->storage($r);
        return $this->redirect("admin/auser/index");


       
    }

    //添加用户信息
    public function add(){
        $data = [
            'typeName' => '添加',
        ];
         return view(null, $data);
    }

    public function modify()
    {
        $id = $this->request->get('id');

        $au = new AU();
        $item = $au->where('id', $id)->find();
        if(!$item){
            return $thi->error('数据不存在');
        }

        $data = [
            'typeName' => '修改',
            'item' => $item,
        ];
        return view('auser/add', $data);
    }

    public function del()
    {
        $id = $this->request->get('id');

        $au = new AU();
        
        $au->remove($id);
        return $this->redirect('admin/auser/index');
    }

}

