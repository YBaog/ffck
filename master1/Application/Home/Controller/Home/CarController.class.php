<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:22
 */
namespace Home\Controller;
use Think\Controller;

class CarController extends Controller
{
    /*
    * 定制服务
    */
    public function carList(){
        $this->display();
    }
    /*
    * 添加接机服务页
    */
    public function carAdd(){
        $this->display('carAdd');
    }
    /*
    * 接机服务详情页
    */
    public function carInfo(){
        $this->display('carInfo');
    }

}