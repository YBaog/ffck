<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 14:14
 */

namespace Home\Controller;
use Think\Controller;
class CommentController extends  Controller
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

}