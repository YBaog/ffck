<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:26
 */

namespace Home\Controller;


class OrderController
{
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
}