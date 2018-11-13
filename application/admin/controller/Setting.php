<?php
namespace app\admin\controller;
use app\common\model\Setting as ST;


class Setting extends Base
{
    function initialize()
    {
        parent::initialize();
        $this->setting = new \app\common\model\Setting();
    }

    public function index()
    {
        $s = new \app\common\Setting();
        $webname = $s->get('webname');
        
        $data = [
            'setting' => $this->setting->select(),
        ];

        return view(null, $data);
    }
  
    public function save()
    {
        $r = [];
        $r['formdata'] = $this->request->post('formdata');
        $r['__token__'] = $this->request->post('__token__');

        $st = new ST();
        $st->check($r);

        $list = [];
        
        foreach($this->setting->select() as $item){
            $list[] = [
                'id' => $item->id,
                'value' => $r['formdata'][$item->key],
            ];
        }
  
        $is = $this->setting->saveAll($list);
        //删除缓存，下次会重新生成
        \think\facade\Cache::rm('setting');

        return $this->success('修改成功', 'admin/setting/index');
    }
}
