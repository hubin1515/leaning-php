<?php
	
	$arr = array();
	$arr[0] = "zhangsan";
	$arr[1] = "lisi";
	$arr[2] = "wangwu";
	
    //echo $arr;  echo只能输出字符串，不能输出复杂类型
    echo $arr[0]; 
	echo "<br>";
    echo $arr[1];
	echo "<br>";
	echo $arr[2];
	echo "<br>";
	
	$result = json_encode($arr);
	echo $result;
	//将数组转化为json格式的字符串
	echo "<br>";
	
	print_r($arr);
	var_dump($arr);
	//print_r  var_dump可以输出更复杂的数据类型
	
	
	
?>