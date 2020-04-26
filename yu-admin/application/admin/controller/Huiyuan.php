<?php
namespace app\admin\controller;

use think\Controller;

class Huiyuan extends Controller
{
//http://localhost/yu-admin/yu-admin/public/index.php/admin/index/index
    public function welcome1()
    {
        return $this->fetch('welcome1');
    }
    public function member_list()
    {
        return $this->fetch('member-list');
    }
    public function member_list1()
    {
        return $this->fetch('member-list1');
    }
    public function member_del()
    {
        return $this->fetch('member-del');
    }


}