<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/21
 * Time: 11:08
 */

header("Content-Type: text/html; charset=UTF-8");
require_once 'mysql.php';
require_once 'redis.php';

$mysql =mysql_conn();
$redis = new Rediser();

$data = [
    'openid'=>"daichendaichen",
    'platenumber'=>"daichendaichen",
    'status'=>1
];
$res=$redis->redisPush('daichenlists',json_encode($data));
if($res == null){
//    echo '入队列成功';
//    echo '<hr />';
    //返回此时链表长度 表示我进来是第几位

    //前面有多少人正在排队功能 必须分开写 因为 再次调用此方法就等于再入一次队列 不合理
    $myque = $redis->getListSize('daichenlists');
    //如果我前面有人 那我排队
    if($myque>10000000){
        $data = [
            'status'=>0,  //表示要排队
            'myque'=>$myque,
        ];
        echo json_encode($data,true);
        //排队页面
    }else{
        //TODO..
        $data = [
            'status'=>1,  //表示不需要排队
            'myque'=>$myque,
        ];
        echo json_encode($data,true);
    }
}