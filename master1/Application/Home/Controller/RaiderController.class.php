<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 12:40
 */
namespace Home\Controller;
use Think\Controller;
class RaiderController extends Controller
{
    /*
     * 添加攻略
     */
    public function raiderAdd()
    {
        $this->display();
    }
    /*
     * 新生攻略
     */
    public function studentList(){
        $this->display('studentList');
    }
    /*
     * 师兄分享
     */
    public function brotherList(){
        $this->display('brotherList');
    }

}