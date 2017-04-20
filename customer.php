<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 17:00
 */
header("Content-Type: text/html; charset=UTF-8");
require_once 'mysql.php';

$mysql =mysql_conn();

$data = $mysql->select("platenum", [
        "LIMIT" => [0, 1000],
    ]
);

var_dump($data);