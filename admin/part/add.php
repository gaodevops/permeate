<?php
	include "/public/demon.php";
	include "../conf/dbconfig.php";
	include "../includes/mysql_func.php";
?>
<div class="container">
<form action="./part/iadd.php" method="post" class="navbar-form navbar-left"  >
	<table>
	<tr><td><input type="submit" value="添加分区" class="btn btn-default" /></td></tr>
    	<tr><td>分区名称：</td><td><input type="text" name="pname" class="form-control"/></td></tr>
    	<tr><td>分区版主：</td><td><input type="text" name="pamins" class="form-control"/>（填写ID，可省略，默认为初始管理员）</td></tr>
	<tr><td><input type="submit" value="添加分区" class="btn btn-default" /></td></tr>
    </table>
</form>
</div>