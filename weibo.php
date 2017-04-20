<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20
 * Time: 14:40
 */

$uid  = get_uid();
$content = get_content();
$timestamp = time();
$weibo = new Weibo();
$weibo->post($uid,$content,$timestamp);
