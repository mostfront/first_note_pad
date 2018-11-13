<?php

namespace  app\common\validate;

class Setting extends  \think\Validate{
    protected $rule = [
        'formdata' => 'token',
    //    'username' => 'require',
    ];
}