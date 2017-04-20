<?php
//	$redis = new Redis();
//	$redis->connect("localhost","6379");
//	$redis->set("key","adsdaaaa");
//	$value=$redis->get("key");
//	echo $value;
//	$redis->close();



//模拟主程序 处理用户

require_once 'redis.php';
require_once 'mysql.php';
header("Content-Type: text/html; charset=UTF-8");

$redis = new Rediser();
$mysql=mysql_conn();
$listname='daichenlists';

//获取list长度
$len = $redis->getListLen($listname);
//
//$last_user_id = $mysql->insert("account", [
//    "user_name" => "foo",
//    "email" => "foo@bar.com",
//    "age" => 25
//]);

$mysql->query("INSERT into admins (openid,platenumber,status) VALUES('aaa','sad','1')");
var_dump($len);

while(True){
    if($redis->getListSize($listname)>0){
        //拿出来一个人
        $info = $redis->rpoplist($listname);
        //TODO..
        var_dump($info);

        $mysql->query("INSERT into admins (openid,platenumber,status) VALUES('aaa','sad','1');");

//
//        $last_user_id = $mysql->debug()->insert("index",[
//            'openId'=>'666',
//            'platenumber'=>'asdasd',
//            'status'=>0
//
//        ] );

    }else{
//        sleep(1);
    }
}

