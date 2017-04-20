<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 14:43
 */

class Rediser{

    public $redis='';
    public function __construct(){
        $this->redis = new Redis();
        $this->redis->connect("localhost","6379");
        return $this->redis;
    }
//    public function __destruct(){
//        $this->redis->close();
//    }
    public function redisPush($listName,$jsonData){
        $this->redis->lPush($listName,$jsonData);
    }

    public function getListLen($listname=''){
        $len=$this->redis->lLen($listname);
        return $len;
    }
    //拿到list
    public function getListSize($listname=''){
        $lsize = $this->redis->lSize($listname);
        return $lsize;
    }
    public function rpoplist($listname){
        $info = $this->redis->rPop($listname);
        $info = json_decode($info,true);
        return $info;
    }
}


//$redis = new Redis('localhost','6379');
//$redis->connect();

//$weibo_info = array(
//
//    'uid'=>get_uid(),
//    'content'=>get_content(),
//    'timestamp'=>time(),
//);
//
//$redis->lPush('weibo_list',json_encode($weibo_info));
//$redis->close();