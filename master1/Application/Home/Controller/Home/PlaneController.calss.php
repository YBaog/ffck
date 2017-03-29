<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:19
 */

namespace Home\Controller;
use Think\Controller;
class PlaneController extends Controller
{
    /*
    * 接机服务
    */
    public function planeList(){
        $this->display('planeList');
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

}