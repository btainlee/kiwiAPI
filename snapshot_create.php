<?php
//创建当前系统快照



require 'function.php';

$des = isset($_GET['des'])?$_GET['des']:'';

$res1 = snapshot_create($id,$key,$des);

if($res1->error ==0){

	echo  "创建快照成功！";
}else{

	echo "创建快照是产生未知错误！";	
}

?>