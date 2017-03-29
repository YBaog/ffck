<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 17:49
 */

namespace Home\Controller;
use Think\Controller;

class StudentController extends Controller
{
    /*
     * 购买机票
     */
    public function ticketsList(){
        $this->display('ticketsList');
    }
    /*
     * 添加机票页面
     */
    public function ticketsAdd(){
        $this->display('ticketsAdd');
    }
    /*
     * 行前指导列表
     */
    public function adviceList(){
        $this->display('ticketsList');
    }
    /*
    * 添加行前指导页面
    */
    public function adviceAdd(){
        $this->display('adviceAdd');
    }
    /*
     * 个性需求列表
     */
    public function needsList(){
        $this->display('needsList');
    }
    /*
    * 添加需求页面
    */
    public function needsAdd(){
        $this->display('adviceAdd');
    }
    /*
    * 个性需求列表
    */
    public function butlerList(){
        $this->display('butlerList');
    }
    /*
    * 添加需求页面
    */
    public function butlerAdd(){
        $this->display('butlerList');
    }
    /*
   * 行李列表
   */
    public function luggageList(){
        $this->display('luggageList');
    }
    /*
    * 添加需求页面
    */
    public function luggageAdd(){
        $this->display('luggageList');
    }

}