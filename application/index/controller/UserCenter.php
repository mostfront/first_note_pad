<?php
namespace app\index\controller;
use app\common\model\user as U;

class UserCenter extends UserBase
{
    public function index()
    {
        return view();
    }

    public function profile()
    {
        return view();
    }

    public function profile_save()
    {
        $r = [
            'id' => $this->user->id,
            'password' => $this->request->post('password'),
            'nickname' => $this->request->post('nickname'),
            'phone' => $this->request->post('phone'),
            'email' => $this->request->post('email'),
            '__token__' => $this->request->post('__token__'),
        ];
        //修改数据
        $u = new U();
        try{
            $u->storage($r, 'profile');
        }
        catch(\Exception $e){
            return $this->error($e->getMessage());
        }
        return $this->success('资料修改成功');
    }
}
