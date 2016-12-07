<?php

/*
*展示快照以及操作

*/
	require 'function.php';


	//show
	$res1 = snapshot_list($id,$key);
	if($res1->error==0){
		
		foreach($res1->snapshots as $key=>$val){
			
			echo "<table border=1px>";
			echo "<tr><td><a href=snapshot_dele.php?name={$res1->snapshots[0]->fileName}>删除这个快照</a></td></tr>";
			foreach($val as $k=>$v){
			
				echo "<tr>";
				echo "<td>".$k."</td>"."<td>".$v."</td>";
				echo "</tr>";
			}
			echo "</table>";
			
		}
	}else{
	
		echo "系统忙，稍后重试！";	
	}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>snapshot</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  </head>
  <body>
  	<hr>
  	创建当前系统快照---------------------<br>
  	 <form action="snapshot_create.php" method="get">
  	 	添加描述：
  	 	<input type=text name="des">
  	 	<input type=submit value="创建快照">
  	</form>
  </body>
</html>