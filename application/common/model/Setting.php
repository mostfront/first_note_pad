<?php

namespace app\common\model;

class Setting extends Base{
    public function check($r){

        $validate = new \app\common\validate\Setting();
        
        if( !$validate->check($r) ){
            return $this->error($validate->getError());
        }
        
    }

}
