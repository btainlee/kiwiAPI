<?php
	$ip = $_GET['ipType'];
	$ptr = $_GET['ptr'];
	$res1 = setPTR($id,$key,$ip,$ptr);
	if ($res->error == 0){
		
		echo "PTR���óɹ���";
	}else{
	
		echo "����δ֪����";
	}

?>