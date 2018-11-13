<?php

namespace  app\common\validate;

class User extends  \think\Validate{
   protected $rule = [
       'password' => 'require|min:1|token',
       'nickname' => 'require',
       'phone' => 'require|mobile',
       'email' => 'require|email',
       'user_status' => 'require|integer',
   ];

   protected $message = [
       'username.require' => '用户名不能为空',
       'username.checkUser' => '用户名已存在',
       'password.require' => '密码不能为空',
       'nickname.require' => '昵称不能为空',
       'phone.require' => '电话不能为空',
       'phone.mobile' => '电话格式无效，请输入手机号',
       'email.require' => '邮箱不能为空',
       'email.email' => '邮箱格式不正确，请输入邮箱地址',
       'user_status.require' => '用户状态不能为空',
       'user_status.integer' => '状态必须为有效的数字',
   ];

   /**
    * 添加场景的验证规则补充
    */
   public function sceneAdd(){
       return $this->append('username', 'require|checkUser');
   }
   
   /**
    * 添加场景的验证规则取消
    */
   public function sceneModify(){
       return $this
       ->remove('password', 'require');
   }


   /**
    * 检查用户名是否唯一
    */
   protected function checkUser($str, $rule, $r){
       $user = new \app\common\model\User();
       
       $row = $user
       ->where('username', $str)
       ->where('id', '<>', $r['id'])
       ->find();
       if($row){
           return false;
       }

       return true;
   }
}