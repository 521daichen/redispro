<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 16:05
 */

require_once 'model/medoo.php';

class mysqler{
    public $option = array(
        'database_type' => 'mysql',
        'database_name' => 'messagequeue',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'dc1995310',
        'charset' => 'utf8'
    );
    public $mysql;
    public function __construct(){
        return $this->mysql=new medoo($this->option);
    }

}