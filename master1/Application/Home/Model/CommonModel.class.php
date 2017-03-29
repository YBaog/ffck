<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 9:47
 */
namespace Home\Model;
use Think\Model;
class CommonModel extends  Model
{
    /*
     *  多条查询
     *  $name 表名
     *  $field 查询字段
     *  $where1 查询条件
     *  $order 排序(默认为asc)
     *  $limit 查询条数
     */
    public function manySelect($name,$field,$where1,$order,$limit){
        $Model = M($name); // 实例化User对象
        $where=empty($where1)?'is_show=1':$where1;
        $result=$Model->where($where)->field($field)->order($order)->limit($limit)->select();
        return $result;
    }

    /*
     *  select 两表联查
     *  $user 主表名
     *  $sql 关联sql
     *  $where 查询条件
     *  $order 排序(默认为asc)
     *  $limit 查询条数
     */
    public function jionSelect($user,$sql,$where,$field,$order,$limit){
        $Model = M("$user");
        $result=$Model->join($sql)
            ->where($where)
            ->field($field)
            ->order($order)
            ->limit($limit)
            ->select();
//        echo $Model->_sql();die;
        return $result;
    }

    /*
     *  find 两表联查
     *  $user 主表名
     *  $sql 关联sql
     *  $where 查询条件
     */
    public function jionFind($user,$sql,$field,$where){
        $Model = M("$user");
        $result=$Model->join($sql)
            ->where($where)
            ->field($field)
            ->find();
        // echo $Model->_sql();die;
        return $result;
    }
    /*
     *  文件上传
     *  $names 添加新的文件夹
     *  $filename 上传的字段
     */
    public function fileUpload($names,$filename){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小 3M
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = '/Public/'.$names.'/'; // 设置附件上传目录    // 上传文件
        $info = $upload->upload($_FILES);
        if (!$info) {// 上传错误提示错误信息
            return $path="";
        } else {
            $path ='Uploads'. $info[$filename]['savepath'] . $info[$filename]['savename'];
            return $path;
        }
    }
    /*
     *  分页
     *  $user 表名
     *  $number 每页条数
     *  $sql sql语句
     */
    public function Pages($user,$number,$sql){
        $User = M($user); // 实例化User对象
        $count      = $User->where('is_show=1')->count();// 查询满足要求的总记录数
        $Page   = new \Think\Page($count,$number);
        $Page->setConfig('header','条记录');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首');
        $Page->setConfig('last','尾');
        $show   = $Page->show();
        $list = M($user)
            ->query($sql)
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();
        $arr=array('show'=>$show,'list'=>$list);
        return $arr;
    }


    /*
     *  添加/修改
     *  $user 表名
     *  $id 区分添加/修改
     *  $path 文件上传路径
     *  $data 数据
     */
    public function addSave($user,$id,$path,$data){
        $con = M($user);
        if($id==''){
            //判断文件上传
            if($path==''){
                $arr=array('status'=>0,'data'=>'上传失败!');
                return $arr;
            }
            //入库
            $res = $con->add($data);
            $arr=array('status'=>1,'data'=>$res);
            return $arr;
        }else{
            //修改
            $result=$con->where("case_id=$id")->save($data);
            $arr=array('status'=>2,'data'=>$result);
            return $arr;
        }
    }
}