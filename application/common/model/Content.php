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
}