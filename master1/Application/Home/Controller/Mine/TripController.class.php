<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:37
 */

namespace Home\Controller;
use Think\Controller;

class TripController extends Controller
{
    /*
    * 司机行程列表
    */
    public function tripList(){
        $this->display('tripList');
    }
    /*
     * 行程详情
     */
    public function tripInfo(){
        $this->display('tripInfo');
    }
}