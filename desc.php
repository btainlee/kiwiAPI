<?php
/*主机描述信息
*/
require 'function.php';
$res = getServiceInfo($id,$key);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>getServiceInfo</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
      <link rel="stylesheet">
  </head>
  <body>
  	<table class="table table-hover">
  		<tr>
  			<td>名称</td>
  			<td>数值</td>
  		</tr>
  		<?php foreach($res as $k=>$v) :?>
  		<tbody>
  		<tr>
  			<td><?php print_r($k);?><td>
  			<td>
  				<?php 
  				if(is_array($v) || is_object($v)){
  					foreach($v as $k1=>$v1){
  						echo '['.$k1.']=>'.$v1."<br>";
  					}
  				}else{
  					print_r($v);
  				}
  				?>
  				
  			</td>
  		</tr>
  		</tbody>
  		<?php endforeach; ?>
  	</table>
  </body>
</html>