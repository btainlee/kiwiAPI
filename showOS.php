<?php

	//获取可以安装的操作系统列表
	
	//厉害了的算法
	/*
		function object_array($res) {  
    		if(is_object($res)) {  
        		$res = (array)$res;  
    		} 
    		if(is_array($res)) {  
         		foreach($res as $key=>$value) {  
             	$res[$key] = object_array($value);  
            }  
     	}  
     return $res;  
      }
      */



	require 'function.php';
	$res = getAvailableOS($id,$key);
     echo "当前操作系统 ：".$res->installed."<br>";
     echo "更换操作系统: ";
     echo "<form action='installOS.php method='get'>";
     echo "<select name='osName'>";
     foreach($res->templates as $key=>$val){
     
     	echo "<option value='$val'>".$val."</option>";
     }
     echo "</select>";
     echo "</form>";
     echo "<input type='submit' value='更换操作系统'>";
     echo "<br>";
     
     
	 
	 


?>