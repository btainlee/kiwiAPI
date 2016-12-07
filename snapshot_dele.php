<?php
/*
* dele snapshot
*/
	require 'function.php';
	$name =$_GET['name'];
	$res1 = snapshot_dele($id,$key,$name);
	if($res1->error==0){
	
		echo "删除成功"	;
	}else{
	
		echo  "删除发生未知错误！";
	}

?>