<?php
	$ip = $_GET['ipType'];
	$ptr = $_GET['ptr'];
	$res1 = setPTR($id,$key,$ip,$ptr);
	if ($res->error == 0){
		
		echo "PTR设置成功！";
	}else{
	
		echo "发生未知错误！";
	}

?>