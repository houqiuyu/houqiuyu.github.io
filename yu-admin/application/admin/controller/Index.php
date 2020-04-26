<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
//http://localhost/yu-admin/yu-admin/public/index.php/admin/index/index
    public function index()
    {
      return $this->fetch('index');
    }
    public function welcome(){
        return $this->fetch('welcome');
    }

}

