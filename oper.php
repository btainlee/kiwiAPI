<?php
	require 'function.php';
	$oper = $_GET['value'];
	$res = oper($id,$key,$oper);
	if($res){
	
		echo "操作成功！";	
	}

?>