<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 16:12
 */




//require_once 'redis.php';

require_once 'mysql.php';

//模拟用户 和redis交互
$mysql = new mysqler();

//$arr = [1,2,3];

//var_dump($mysql);

$data = $mysql->query("SELECT * FROM platenum limit 0,100")->fetchAll();
//$data = $mysql->query("select * from platenum limit 0,100 ")->fetchAll();
var_dump($data);

//$datas = $mysql->select("platenum", "LIMIT" =>array(0,20));





