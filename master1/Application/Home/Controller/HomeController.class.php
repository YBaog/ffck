<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 17:22
 */

namespace Home\Controller;
use Think\Controller;

class HomeController extends Controller
{
    /*
     * 定制服务列表页
     */
    public function madeList(){
        $this->display();
    }
    /*
     * 添加定制服务页
     */
    public function madeAdd(){
        $this->display('madeAdd');
    }
    /*
    * 定制服务详情页
    */
    public function madeInfo(){
        $this->display('madeInfo');
    }

    /*
     * 定制服务
     */
    public function planeList(){
        $this->display();
    }

    /*
     * 定制服务
     */
    public function carList(){
        $this->display();
    }

}