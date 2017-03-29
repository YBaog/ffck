<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 17:16
 */

namespace Home\Controller;
use Think\Controller;

class UsersController extends Controller
{
    /*
     *用户管理
     */
    public function userList(){
      $this->display('userList');
    }
    /*
     * 司机列表
     */
    public function driverList(){
        $this->display('driverList');
    }
    /*
     * 管理员列表
     */
    public function adminList(){
        $this->display('adminList');
}
    /*
     * 添加管理员
     */
    public function adminAdd(){
        $this->display('adminAdd');
    }

}