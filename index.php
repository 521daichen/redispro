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

$mysql = new mysqler();
$redis = new Rediser();

$data = $database->query("SELECT * FROM platenum limit 0,100")->fetchAll();
print_r($data);


//// 插入数据示例
//$database->insert('account', [
//    'user_name' => 'foo',
//    'email' => 'foo@bar.com',
//    'age' => 25,
//    'lang' => ['en', 'fr', 'jp', 'cn']
//]);
