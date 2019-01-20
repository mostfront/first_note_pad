<?php
namespace app\index\controller;

use app\common\model\Content as C;
//use think\Db;

class Index extends Base
{
    public function index()
    {
        $newData = C::where('content_status', 1)->order('id', 'desc')->limit(10)->paginate(10);
    $data = [
        'newData' => $newData,
    ];
    
    return view(null, $data);
    }

    public function read($id)
    {
        $newData = C::where('id', $id)->where('content_status', 1)->find();
        if(!$newData){
            return $this->error('数据不存在');
        }
        $data = [
            'newData' => $newData,
        ];
    return view(null, $data);
    }
}
