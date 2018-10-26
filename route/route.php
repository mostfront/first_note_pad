<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('login', 'index/login');
Route::get('test', 'test/index');

#提交留言
Route::post('gbook/save', 'index/Gbook/save');
#留言首页
Route::get('gbook', 'index/Gbook/index');
#后台首页
Route::get('admin/index', 'admin/Index/index');

Route::post('admin/login/check', 'admin/Login/check');
Route::get('admin/login/logout', 'admin/Login/logout');
Route::get('admin/login', 'admin/Login/index');

Route::get('admin/auser/index', 'admin/auser/index');
Route::get('admin/auser/add', 'admin/auser/add');
Route::get('admin/auser/modify', 'admin/auser/modify');
Route::get('admin/auser/del', 'admin/auser/del');



return [

];
