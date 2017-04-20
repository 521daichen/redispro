<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 16:12
 */


require_once 'redis.php';

//require_once 'mysql.php';

//模拟用户 和redis交互
//$mysql = new mysqler();


$option = array(
    'database_type' => 'mysql',
    'database_name' => 'messagequeue',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'dc1995310',
    'charset' => 'utf8'
);

$mysqler=new medoo($this->option);


$data = $mysqler->select("platenum", [
    "LIMIT" => [0, 1000]
]);

var_dump($data);

//$datas = $mysql->select("platenum", "LIMIT" =>array(0,20));





