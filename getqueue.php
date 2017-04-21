<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/21
 * Time: 9:24
 */
require_once 'redis.php';
require_once 'mysql.php';
//当前排队人数

$redis = new Rediser();
$mysql =mysql_conn();
$queue_num = $redis->getListSize('daichenlists');

$count = $mysql->count("admins",'*');

$data = [
    'num'=>$queue_num,
    'del'=>$count,
];

echo json_encode($data,true);
