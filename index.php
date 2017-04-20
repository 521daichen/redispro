<?php
//	$redis = new Redis();
//	$redis->connect("localhost","6379");
//	$redis->set("key","adsdaaaa");
//	$value=$redis->get("key");
//	echo $value;
//	$redis->close();

// 或者将你下载的medoo文件拷贝到你相应的目录，然后载入即可
require_once 'model/medoo.php';

header("Content-Type: text/html; charset=UTF-8");

// 初始化配置
$database = new medoo(
array(
    'database_type' => 'mysql',
    'database_name' => 'messagequeue',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'dc1995310',
    'charset' => 'utf8'
)
);

$data = $database->query("SELECT * FROM platenum limit 0,100")->fetchAll();
print_r($data);


//// 插入数据示例
//$database->insert('account', [
//    'user_name' => 'foo',
//    'email' => 'foo@bar.com',
//    'age' => 25,
//    'lang' => ['en', 'fr', 'jp', 'cn']
//]);
