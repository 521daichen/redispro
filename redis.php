<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 14:43
 */

class Rediser{
    public $host='localhost';
    public $port='6379';
    public $redis;
    public function __construct(){
        return $this->redis = new Redis($this->host,$this->port);
    }
    public function __destruct(){
        $this->redis->close();
    }
    public function redisPush($listName,$jsonData){
        $this->redis->lPush($listName,$jsonData);
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