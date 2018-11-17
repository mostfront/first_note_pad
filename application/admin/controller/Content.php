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
            'title' => $this->request->post('title'),
            'content' => $this->request->post('content'),
            'content_status' => $this->request->post('content_status'),
            '__token__' => $this->request->post('__token__'),
            'admin_user_id' => $this->user->id,
        ];

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

    //上传的方法
    public function up(){
        $file = $this->request->file('file1');
        $info = $file->validate(['size'=>1024*2048,'ext'=>'jpg,png,gif'])->rule('uniqid')->move('./uploads/editor', '');
        $result = [];
        if($info){
            $result['success'] = true;
            $result['file_path'] = url("./uploads/editor/".$info->getSaveName());
        }else{
            $result['success'] = false;
            $result['msg'] = $file->getError();
        }
        return json($result);
    }
}
