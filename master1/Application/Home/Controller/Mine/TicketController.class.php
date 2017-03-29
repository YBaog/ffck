<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:24
 */

namespace Home\Controller;

use Think\Controller;
class TicketController extends Controller
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
}