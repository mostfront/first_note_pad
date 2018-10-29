<?php

namespace app\common\model;

class AdminUser extends Base{
    public function storage($r){
        //数据验证
        $validate = new \app\common\validate\AdminLogin();
        $scene = $r['id'] ? 'modify' : 'add';
        if( !$validate->scene($scene)->check($r) ){
            return $this->error($validate->getError());
        }

        $au = $this;
        //如果是修改模式，就获取目标数据对象
        if($r['id']){
            $au = $this->where('id', $r['id'])->find();
        }

        //如果没有输入密码，则禁止数据库更新该字段
        if($r['password']){
        $r['password'] = password_hash($r['password'], PASSWORD_DEFAULT);
        }else{
            unset($r['password']);
        }
        $result = $au->allowfield(true)->save($r);
    }

    //删除数据的方法
    public function remove($id){
        $item = $this->where('id', $id)->find();
        if(!$item){
            return $this->error('数据不存在');
        }
        $item->delete();

    }
       
    

}
