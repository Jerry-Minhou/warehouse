<?php
error_reporting(1);

$online=mysqli_connect('localhost','root','789456','mydb')or die("数据库连接失败");

$online->query("set names 'utf8'");

//$online = mysql_connect("localhost","root","789456");

//mysql_select_db("book",$online);

//mysql_query("set names utf8");

?>