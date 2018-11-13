<?php

namespace app\common\model;

class User extends Base{
    public function storage($r){
        //数据验证
        $validate = new \app\common\validate\User();
        $scene = $r['id'] ? 'modify' : 'add';
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

}
