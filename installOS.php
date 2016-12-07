<?php
/*
*this page is for get useable os and change os from os_list
*
*/
require 'function.php';
$osName = $_GET['osName'];
$res = installOS($id,$key,$osName);
if($res){

	echo "安装操作系统成功";	
}else{

	echo "安装时发生未知错误！";	
}
?>