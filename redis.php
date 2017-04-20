<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 14:43
 */

$redis = new Redis('localhost','6379');
$redis->connect();

$weibo_info = array(

    'uid'=>get_uid(),
    'content'=>get_content(),
    'timestamp'=>time(),
);

$redis->lPush('weibo_list',json_encode($weibo_info));
$redis->close();