<?php
namespace app\common\model;

/*
*内容模型类
 */
class Content extends Base{ 
    public function adminUser(){
        return $this->belongsTo('AdminUser');
    }
}