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
    public function remove($id, $user_id = null){
        $obj = $this;
        if($user_id){
            $obj = $obj->my($user_id);
        }
        $item = $obj->where('id', $id)->find();
        if(!$item){
            return exception("数据不存在", 10003);
        }
        $item->delete();
    }

    public function storage($r, $user_id = null){
        //数据验证
        $validate = new \app\common\validate\Content();
        $scene = $r['id'] ? 'modify' : 'add';
        if( !$validate->scene($scene)->check($r) ){
            return exception($validate->getError(), 10005);
        }

        $c = $this;
        //如果是修改模式，就获取目标数据对象
        if($r['id']){
            //如果传入user_id则必须进行用户验证
            $obj = $this;
            if( $user_id ){
                $obj = $this->my( $user_id );
            }
            $c = $obj->where('id', $r['id'])->find();
            //如果没有取得user_id则抛出错误
            if(!$c){
                return exception('数据不存在', 10009);
            }
        }

        $result = $c->allowfield(true)->save($r);
    }

    /*查询指定用户的数据
    */
    public function scopeMy($query, $user_id){
        $query->where('user_id', $user_id);
    }

    public function getIntroAttr(){
        return mb_substr(strip_tags($this->content), 0, 180);
    }

    public function getImageAttr(){
        $is = preg_match("/<img.*?src=('|\")(.*?)('|\")/i", $this->content, $image);
        if( $is ){
            return $image[2];
        }else{
            return url("static/images/lei.jpg");
        }
    }

    public function getUrlAttr(){
            return url("index/index/read", ['id'=>$this->id]);
        }
}