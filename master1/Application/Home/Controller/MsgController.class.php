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
     * 评论列表
     */
    public function commentList(){
        $this->display('commentList');
    }
    /*
     * 评价列表
     */
    public function evaluateList(){
        $this->display('evaluateList');
    }
    /*
     * 反馈列表
     */
    public function feedbackList(){
        $this->display('feedbackList');
    }
    /*
     * 反馈列表
     */
    public function msgList(){
        $this->display('msgList');
    }



}