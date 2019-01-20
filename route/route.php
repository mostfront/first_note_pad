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

Route::get('/', 'index/index');
//个人主页
Route::get('/home/:id', 'index/home/index')->pattern(['id'=>'\d+']);
Route::get('/read/:id', 'index/index/read')->pattern(['id'=>'\d+']);

Route::get('signup', 'index/sign/up');
Route::post('signup', 'index/sign/up_save');
Route::get('signin', 'index/sign/in');
Route::post('signin', 'index/sign/in_check');
Route::get('logout', 'index/sign/logout');

#提交留言
Route::post('gbook/save', 'index/Gbook/save');
#留言首页
Route::get('gbook', 'index/Gbook/index');
#个人中心
Route::group('u', function(){
    #用户中心首页
    Route::get('index', 'index/UserCenter/index');
    Route::get('profile', 'index/UserCenter/profile');
    Route::post('profile', 'index/UserCenter/profile_save');
    Route::get('blog/index', 'index/UserBlog/index');
    Route::get('blog/add', 'index/UserBlog/add');
    Route::get('blog/modify', 'index/UserBlog/modify');
    Route::post('blog/save', 'index/UserBlog/save');
    Route::get('blog/status', 'index/UserBlog/status');
    Route::get('blog/del', 'index/UserBlog/del');
    Route::post('blog/up', 'index/UserBlog/up');
});

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

    //基础设置路由
   Route::group('setting', function(){
        Route::get('index', 'admin/setting/index');
        Route::post('save', 'admin/setting/save');
    });

    //管理员管理
    Route::group('auser', function(){
        Route::get('index', 'admin/auser/index');
        Route::post('save', 'admin/auser/save');
        Route::get('add', 'admin/auser/add');
        Route::get('modify', 'admin/auser/modify');
        Route::get('del', 'admin/auser/del');
    });

    //用户管理
    Route::group('user', function(){
        Route::get('index', 'admin/user/index');
        Route::post('save', 'admin/user/save');
        Route::get('add', 'admin/user/add');
        Route::get('modify', 'admin/user/modify');
        Route::get('status', 'admin/user/status');
    });
    
    //内容管理
    Route::group('content', function(){
        Route::get('index', 'admin/content/index');
        Route::post('save', 'admin/content/save');
        Route::get('add', 'admin/content/add');
        Route::get('modify', 'admin/content/modify');
        Route::get('status', 'admin/content/status');
        Route::get('del', 'admin/content/del');
        Route::post('up', 'admin/content/up');
    });

});

return [

];
