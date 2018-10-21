<?php

namespace  app\common\validate;

class AdminLogin extends  \think\Validate{
   protected $rule = [
//       'username' => 'require|token',
       'username' => 'require',
       'password' => 'require',
   ];

   protected $message = [
       'username.require' => '用户名不能为空',
       'password.require' => '密码不能为空',
   ];

}