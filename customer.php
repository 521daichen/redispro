<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 17:00
 */
header("Content-Type: text/html; charset=UTF-8");
require_once 'mysql.php';
require_once 'redis.php';

$mysql =mysql_conn();

$redis = new Rediser();
//获取list长度
$data=$mysql->select("platenum",'*',[
    "LIMIT" => [0, 30000]
]);

for ($i=0;$i<count($data);$i++){
    //将用户存进redis list中
    var_dump(json_encode($data[$i]));
    $res=$redis->redisPush('daichenlists',json_encode($data[$i]));
    if($res == null){

        echo '入队列成功';
        echo '<hr />';
        sleep(0.1);
    }
}

//var_dump($data);