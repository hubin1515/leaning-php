<?php
  
    $username = $_POST["username"];
	$password = $_POST["password"];
	
	if($username =="hubin" && $password == "123") {
		echo "login success";
	} else {
		echo "login falied";
	}
  
?>