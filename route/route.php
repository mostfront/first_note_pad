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

#后台路由
Route::group('admin', function(){
    #后台首页
    Route::get('index', 'admin/Index/index');
    #登陆页
    Route::group('login', function(){
        Route::post('check', 'admin/Login/check');
        Route::get('logout', 'admin/Login/logout');
        Route::get('/', 'admin/Login/index');
    });
   
    //管理员管理
    Route::group('auser', function(){
        Route::get('index', 'admin/auser/index');
        Route::post('save', 'admin/auser/save');
        Route::get('add', 'admin/auser/add');
        Route::get('modify', 'admin/auser/modify');
        Route::get('del', 'admin/auser/del');
    });

});

return [

];
