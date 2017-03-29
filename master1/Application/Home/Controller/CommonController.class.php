<?php
/**
 * Created by sublime.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 9:29
 */

namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{

	public function __construct(){
		
			parent::__construct();
			/*设计预留*/
		}

    /**
     * 失败输出
     */
    public function failure($error_status = 0, $error_msg = 'ERROR', $error_data = array(), $other_data = array())
    {

        //拼装数据
        $error_arr = array();

        //失败的状态码
        $error_arr['status'] = $error_status;

        //失败的提示信息
        $error_arr['msg'] = $error_msg;

        //失败返回的错误数据
        $error_arr['data'] = $error_data;

        $this->JsonOutPut($error_arr, $other_data);

    }

    /**
     * 成功输入
     */
    public function success($data = array(), $success_msg = 'success', $success_status = 200, $other_data = array())
    {

        //拼装数据
        $error_arr = array();

        //成功的状态码
        $error_arr['status'] = $success_status;

        //成功的提示信息
        $error_arr['msg'] = $success_msg;

        //成功返回的数据
        $error_arr['data'] = $data;

        $this->JsonOutPut($error_arr, $other_data);

    }

    /**
     * 输入json数据
     */
    public function JsonOutPut($arr = array(), $other_data)
    {

        if (!is_array($arr)) {
            $arr = ( array )$arr;
        }

        //合并要返回的数据
        $arr = array_merge($arr, (array)$other_data);

//        P( $arr );

        //返回的JSON数据
        $json_str = json_encode($arr);

        echo  $json_str;
        exit;
    }
}