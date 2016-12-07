<?PHP
/*
*展示PTR记录   并可以重新设置ptr记录
*/
require 'function.php';
echo "PTR记录，是电子邮件系统中的邮件交换记录的一种；另一种邮件交换记录是A记录（在IPv4协议中）或AAAA记录（在IPv6协议中）。PTR记录常被用于反向地址解析。^_^";

//show
$res1 = getServiceInfo($id,$key);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>setPTR</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  </head>
  <body>
  	<table class="table table-hover"><tbody>
  		<tr>
  			<td>ip地址</td>
  			<td>ptr记录</td>
  		</tr>
  		<?php foreach($res1->ptr as $key=>$val):?>
  		<tr>
  			<td><?php echo $key;?></td>
  			<td><?php echo $val;?></td>
  		</tr>
		<?php endforeach;?>
	</tbody></table>
	<fieldset>
		<form action="setPTR_Action.php" method="get">
			ip类型：
			<select name="ipType">
				<option value="<?php echo $res1->ip_addresses[0]; ?>">ipv4</option>
				<option value="<?php echo $res1->ip_addresses[1]; ?>">ipv6</option>
			</select><br>
			ptr:
			<input type=text placeholder="ptr" name="ptr"><br>
			<input type="submit" value="修改">
		</form>
	</fieldset>
  </body>
</html>