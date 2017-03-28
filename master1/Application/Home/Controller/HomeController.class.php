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
     * 添加接机服务页
     */
    public function planeAdd(){
        $this->display('planeAdd');
    }
    /*
    * 接机服务详情页
    */
    public function planeInfo(){
        $this->display('planeInfo');
    }


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