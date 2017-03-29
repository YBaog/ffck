<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:37
 */

namespace Home\Controller;
use Think\Controller;

class DriverController extends Controller
{
    /*
    * 司机行程列表
    */
    public function driverList(){
        $this->display('driverList');
    }
    /*
     * 行程详情
     */
    public function driverInfo(){
        $this->display('driverInfo');
    }
}