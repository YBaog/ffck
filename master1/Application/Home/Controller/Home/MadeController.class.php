<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 17:22
 */

namespace Home\Controller;
use Think\Controller;

class MadeController extends Controller
{
	public function made_add()
	{
		$ma_title          = trim(I("ma_title"));
		$ma_content        = trim(I("ma_content"));
		$is_push           = trim(I("is_push"));
		$ma_price          = trim(I("ma_price"));
		
		$path=$this->fileUpload("made","ma_path");
        $arr  = array("ma_title"=>$ma_title,
        	 		  "ma_content"=>$ma_content,
        	 		  "ma_path"=>$path,
        	 		  "is_push"=>$is_push,
        	 		  "ma_price"=>$ma_price);
		$data = M('made') ->add($arr);
		if($data){
			$this->success('新增成功', U('Home/madeAdd'));
		}
		else{
			$this->error("新增成功");
		}
	}

    public function fileUpload($folder,$filename){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小 3M
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = '/Public/'.$folder.'/'; // 设置附件上传目录    // 上传文件
        $info = $upload->upload($_FILES);
        if (!$info) {// 上传错误提示错误信息
            return  false;
        } else {
            $path ='Uploads'. $info[$filename]['savepath'] . $info[$filename]['savename'];
            return $path;
        }
    }


    public function json($num,$arr){
        if($num == 400){
            $arr=array('code'=>0,'msg'=>'失败','success'=>'false','data'=>array());
            //p($arr);
            $data = json_encode($arr);
            echo $data;exit;
            return $data;
        }else if($num == 200){
            $brr=array('code'=>1,'msg'=>'成功','success'=>'true','data'=>$arr);
            //p($arr);
            $data = json_encode($brr);
            echo $data;exit;
            return $data;
        }else if($num == 300){
            $arr=array('code'=>0,'msg'=>'失败','success'=>'false','data'=>"");
            //p($arr);
            $data = json_encode($arr);
            echo $data;exit;
            return $data;
        }
    }
}