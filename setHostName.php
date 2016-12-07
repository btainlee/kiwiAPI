<?php
/*
*显示当前主机名，并可已修改主机名
*/

require 'function.php';

//show
 $res1 = getServiceInfo($id,$key);
 echo "当前主机名是：" .$res1->hostname ."<br>";
 echo " <form action='setHostName_Action.php' method='get'>更换为:<input type=text name='hostname'>
 		<br><input type=submit value='更改'></form>";
?>