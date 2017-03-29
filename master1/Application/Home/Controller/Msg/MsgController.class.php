<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 17:47
 */

namespace Home\Controller;
use Think\Controller;
class MsgController extends Controller
{
    /*
     * 消息列表
     */
    public function msgList(){
        $this->display('msgList');
    }



}