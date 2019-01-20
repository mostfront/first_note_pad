<?php

namespace app\common\model;

class User extends Base{
    
    //获取用户信息
    public function getUser( $id ){
        $user = $this->where('id', $id)->find();
        if (!$user){
            return null;
        }
        return $user;
    }

    public function storage($r, $scene = null){
        //数据验证
        $validate = new \app\common\validate\User();
        if( !$scene ){
            $scene = $r['id'] ? 'modify' : 'add';
        }

        if( !$validate->scene($scene)->check($r) ){
            return exception($validate->getError(), 10001);
        }

        $u = $this;
        //如果是修改模式，就获取目标数据对象
        if($r['id']){
            $u = $this->where('id', $r['id'])->find();
        }

        //如果没有输入密码，则禁止数据库更新该字段
        if($r['password']){
        $r['password'] = password_hash($r['password'], PASSWORD_DEFAULT);
        }else{
            unset($r['password']);
        }
        $result = $u->allowfield(true)->save($r);
    }
    #检查用户状态。
    public function isStatus(){
        if( $this->user_status <> 1){
            return '当前用户已被禁用，请联系管理员。';
        }
        return true;
    }
    public function getBlogurlAttr(){
        return url('index/home/index', ['id'=>$this->id]);
    }

}
