<?php

	$arr = array("zhangsan","lisi","wangwu");
	print_r($arr);
	var_dump($arr);
	
	echo json_encode($arr);
	echo "<br>";
	
	echo count($arr);
	
	$result =add(2,3);
	echo "计算结果为：" . $result;
	
	
	function add($num1,$num2){
		return $num1 + $num2;
	}
	
?>