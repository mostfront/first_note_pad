<?php
namespace app\index\controller;
use app\common\model\User as U;

class UserBase extends Base{
    function initialize(){
        parent::initialize();
        if( !$this->user ){
            return $this->error('请先登陆', 'index/sign/in');
        }
        if( ($msg = $this->user->isStatus()) !==true){
            return $this->error($msg, 'index/sign/in');
        }
    }
}