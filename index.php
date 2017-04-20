<?php
	$redis = new Redis();
	$redis->connect("localhost","6379");
	$redis->set("key","adsdaaaa");
	$value=$redis->get("key");
	echo $value;
	$redis->close();
