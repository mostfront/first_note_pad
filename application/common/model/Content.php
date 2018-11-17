<?php
namespace app\common\model;

/*
*内容模型类
 */
class Content extends Base{ 
    public function adminUser(){
        return $this->belongsTo('AdminUser');
    }
    public function user(){
        return $this->belongsTo('User');
    }
    //删除数据的方法
    public function remove($id){
        $item = $this->where('id', $id)->find();
        if(!$item){
            return exception("数据不存在", 10003);
        }
        $item->delete();
    }

    public function storage($r){
        //数据验证
        $validate = new \app\common\validate\Content();
        $scene = $r['id'] ? 'modify' : 'add';
        if( !$validate->scene($scene)->check($r) ){
            return exception($validate->getError(), 10005);
        }

        $c = $this;
        //如果是修改模式，就获取目标数据对象
        if($r['id']){
            $c = $this->where('id', $r['id'])->find();
        }

        $result = $c->allowfield(true)->save($r);
    }
}