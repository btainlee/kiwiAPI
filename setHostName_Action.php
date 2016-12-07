<?php
	require 'function.php';
	$hostname = $_GET['hostname'];
	$res = setHostName($id,$key,$hostname);
	var_dump($res->error = 0);
	if($res){
	
		echo "主机名修改成功，新的主机名是:" .$hostname;	
	}else{
	
		echo "修改发生未知错误";	
	}
	
?>