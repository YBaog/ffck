<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 12:29
 */

use Think\Controller;
class ReleaseController extends Controller
{
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

}