<?php

//	$arr = array("zhangsan","lisi","wangwu");
//	
//	
//  //echo $arr;  echo只能输出字符串，不能输出复杂类型
//  echo $arr[0]; 
//	echo "<br>";
//  echo $arr[1];
//	echo "<br>";
//	echo $arr[2];
//	echo "<br>";
//	
//	$result = json_encode($arr);
//	echo $result;
//	//将数组转化为json格式的字符串
//	echo "<br>";
//	
//	print_r($arr);
//	var_dump($arr);
	//print_r  var_dump可以输出更复杂的数据类型
	
	
	//php中数组的下标可以更改
	$arr = array("zhangsan","name1"=>"lisi","wangwu");
	echo $arr[0];
	var_dump($arr);
	echo $arr["name1"];
	echo "<br>";
	
	
	//二维数组
	$arr =array();
	$arr["zhangsan"]=array("age"=>19,"sex"=>"male","height"=>"180");
	$arr["lisi"]=array("age"=>19,"sex"=>"famale","height"=>"160");
	$arr["wangwu"]=array("age"=>19,"sex"=>"male","height"=>"190");
	
	var_dump($arr);
	
	$result = json_encode($arr);
	echo $result;  //形如js中的  key（value）
	
	
?>