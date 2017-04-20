<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 14:47
 */

$redis = new Redis('localhost','6379');
$redis->connect();
$weibo =new Weibo();

while(True){
    if($redis->lSize('weibo_list')>0){
        $info = $redis->rPop('weibo_list');
        $info=json_decode($info);
        $weibo->post($info->uid,$info->content,$info->timestamp)
    }else{
        sleep(1);
    }
}