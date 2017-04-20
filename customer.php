<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 16:12
 */


require_once 'redis.php';

require_once 'mysql.php';

//模拟用户 和redis交互
$mysql = new mysqler();


$data = $database->select("platenum", [
    "LIMIT" => [0, 1000]
]);

var_dump($data);

//$datas = $mysql->select("platenum", "LIMIT" =>array(0,20));





