<?php

//应用公共文件
use app\common\model\User as U;
use app\common\model\Content as C;

//获取优秀博主
function getStarUsers($number=5){
    //获取优秀博主
    $starUsers = U::where('user_status', 1)->order('id', 'desc')->limit($number)->select();
    return $starUsers;
}

//获取优秀博文
function getStarBlogs($number=5){
    //获取优秀博文
    $starIds = setting('star_contents');
    $starBlogs = C::where('id', 'in', $starIds)->where('content_status', 1)->order('id', 'desc')->limit($number)->select();
    return $starBlogs;
}
