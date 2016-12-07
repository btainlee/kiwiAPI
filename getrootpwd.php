<?php
/*
*   重新设置一个root密码
*/
require 'function.php';
$res = getrootpwd($id,$key);
if($res){

	echo "新的root密码是：" .$res->password;	
}else{

	echo "重新设置密码是发生未知错误!";	
}
?>