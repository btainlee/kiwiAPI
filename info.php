<?php
require 'getinfo.php';
if($id==''){
	echo "请<a href=login.html target='target'>登录</a>";
}else{
echo "当前用户是" .$id;
}
?>