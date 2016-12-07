<?php
/*
**this page is for all function can be used
*/
//测试连接函数
require 'getinfo.php';
function testlink($id,$key){
	$request = "https://api.64clouds.com/v1/getServiceInfo?veid={$id}&api_key={$key}";
	if( @ file_get_contents ($request)){
		return true;	
	}else{
	
		return false;
	}
}

//getServiceinfo
function getServiceInfo($id,$key){

	$request = "https://api.64clouds.com/v1/getServiceInfo?veid={$id}&api_key={$key}";
    $serviceInfo = json_decode (@ file_get_contents ($request));
    return $serviceInfo;
}
//开机，关机，重启，强制关机操作
function oper($id,$key,$oper){

	$request = "https://api.64clouds.com/v1/{$oper}?veid={$id}&api_key={$key}";
	$oper = json_decode (@file_get_contents ($request));
	return $oper;
}
//获取可以安装的操作系统
function getAvailableOS($id,$key){

		$request = "https://api.64clouds.com/v1/getAvailableOS?veid={$id}&api_key={$key}";
	    $oper =json_decode (file_get_contents ($request));
	    return $oper;
}
//安装操作系统
function installOS($id,$key,$osName){

		$request = "https://api.64clouds.com/v1/reinstallOS?os={$osName}&veid={$id}&api_key={$key}";
	    $oper =json_decode (file_get_contents ($request));
	    return $oper;
}
//重设root密码
function getrootpwd($id,$key){

		$request = "https://api.64clouds.com/v1/resetRootPassword?veid={$id}&api_key={$key}";
	    $oper =json_decode (file_get_contents ($request));
	    return $oper;
}
//设置主机名
function setHostName($id,$key,$hostname){

		$request = "https://api.64clouds.com/v1/setHostname?newHostname={$hostname}&veid={$id}&api_key={$key}";
	    $oper =json_decode (file_get_contents ($request));
	    return $oper;
}
//设置PTR
function setPTR($id,$key,$ip,$ptr){

		$request = "https://api.64clouds.com/v1/setPTR?ip={$ip}&ptr={$ptr}&veid={$id}&api_key={$key}";
	    $oper =json_decode (file_get_contents ($request));
	    return $oper;
}

//获取快照列表
function snapshot_list($id,$key){

		$request = "https://api.64clouds.com/v1/snapshot/list?veid={$id}&api_key={$key}";
	    $oper =json_decode (file_get_contents ($request));
	    return $oper;
}

//创建一个快照
function snapshot_create($id,$key,$des){
        if($des==''){
			$request = "https://api.64clouds.com/v1/snapshot/create?veid={$id}&api_key={$key}";
		}else{
		
			$request = "https://api.64clouds.com/v1/snapshot/create?description={$des}&veid={$id}&api_key={$key}";	
		}
	    	$oper =json_decode (file_get_contents ($request));
	    	return $oper;
}
//删除一个快照
function snapshot_dele($id,$key,$name){

		$request = "https://api.64clouds.com/v1/snapshot/delete?snapshot={$name}&veid={$id}&api_key={$key}";
		$oper =json_decode (file_get_contents ($request));
	    return $oper;
}

?>