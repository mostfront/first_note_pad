<?php
namespace app\common\model;

/*
*管理员模型类
*所有数据模型，都应该用为它的子类存在
 */
class Base extends \think\Model{
    use \think\model\concern\SoftDelete;

}