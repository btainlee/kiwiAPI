<?php
/*
*****get id && key for connect kiwi api
*****write id  and   key into userinfo.php  temply
*/
	require'function.php';
	$id = isset($_GET['id']) ? $_GET['id'] : ''; 
	$key = isset($_GET['key']) ? $_GET['key'] : '';
	if($id=='' || $key==''){
		echo "id or key can't be null!";
		header("refresh:2;url=./login.html");
		die();
	}
	if(testlink($id,$key)){
	
			echo "link succeed!";
			$idfile = "id";
			$keyfile="key";
			file_put_contents($idfile,$id);
			file_put_contents($keyfile,$key);
			header("refresh:1;url=index.html");
	}else{
		echo "δ�ܳɹ�����api,������id����key����";
		echo '<a href="login.html">���ص�¼ҳ��</a>';	
	}
?>