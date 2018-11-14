<?php
namespace app\admin\controller;

use app\common\model\Content as C;

class Content extends Base
{
    public function initialize(){
        parent::initialize();
        $this->content_status = config('project.content_status');
        $this->assign('content_status', $this->content_status);
    }

    public function index()
    {
        // 搜索功能
        $key= trim($this->request->get('key'));
        $c = C::with('admin_user', 'user');
        
        //搜索条件
        if($key){
            $c = $c -> where('title', 'like', "%{$key}%");
        }

        // 首页显示数据实例化与传递
        $cData = $c->order('id', 'sec')->paginate(10);
        $data = [
            'cData' => $cData,
            'key' => $key,
        ];
        return view(null, $data);
    }
    public function add()
    {
        $data = [
            'typeName' => '添加',
        ];
         return view(null, $data);
    }
    public function save()
    {
        $r = [
            'id' => $this->request->post('id'),
            'password' => $this->request->post('password'),
            'nickname' => $this->request->post('nickname'),
            'phone' => $this->request->post('phone'),
            'email' => $this->request->post('email'),
            'content_status' => $this->request->post('content_status'),
            '__token__' => $this->request->post('__token__'),
        ];
        //如果你处于添加模式，则追加用户数据，编辑模式下不允许修改用户名
        if($r['id'] < 1){
            $r['title'] = $this->request->post('title');
        }

        $c = new C();
        try{
        $c->storage($r);
        }
        catch(\Exception $e){
            return $this->error($e->getMessage());
        }
        return $this->redirect('admin/content/index');
    }
    public function modify()
    {
        $id = $this->request->get('id');

        $c = new C();
        $item = $c->where('id', $id)->find();
        if(!$item){
            return $this->error('数据不存在');
        }

        $data = [
            'typeName' => '修改',
            'item' => $item,
            'disabled' => "disabled",
        ];
        return view('content/add', $data);
    }    
    public function status()
    {
        $status = (int)$this->request->get('status');
        $id = (int)$this->request->get('id');
        if($id<1){
            return $this->error('数据无效');
        }
        $new_status = $status == 1 ? 0 : 1;
        $item = C::where('id', $id)->find();
        if(!$item){
            return $this->error('数据无效');
        }
        $item->save([
            'content_status' => $new_status
        ]);
        return $this->success("操作成功");
    }
    public function delete(){
        $id = $this->request->get('id');
        $c = new C();
        try{
            $c->remove($id);
        }catch(\Exception $e){
            return $this->error($e->getMessage());
        }
        return $this->success("操作成功");
    }
}
