<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 16:22
 */

namespace Home\Controller;
use Think\Controller;

class MineController extends Controller
{
    /*
     * 添加优惠券
     */
    public function ticketAdd(){
        $this->display('ticketAdd');
    }
    /*
     * 优惠券列表
     */
    public function ticketList(){

        $this->display('ticketList');

    }
    /*
     * 订单列表
     */
    public function orderList(){
        $this->display('orderList');
    }
    /*
     * 订单详情
     */
    public function orderInfo(){
        $this->display('orderInfo');
    }
    /*
    * 发布列表
    */
    public function releaseList(){
        $this->display('orderList');
    }
    /*
     * 发布详情
     */
    public function releaseInfo(){
        $this->display('orderInfo');
    }

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