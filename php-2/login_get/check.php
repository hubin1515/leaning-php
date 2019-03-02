<?php

	//get请求 ：参数在url后面，多个参数用$进行连接
	$username = $_GET["username"];
	$password = $_GET["password"];
	//按理说，这里的数据应该访问数据库
	if ($username =='hubin' && $password == '123') {
		echo "login success";
	} else {
		echo "login falied";
	}
?>