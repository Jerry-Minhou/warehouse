<?php
ob_start();
session_start(); //开启缓存
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','root','789456','mydb');
mysqli_set_charset($link, "utf8");
if (!$link) {
    die("连接失败:".mysqli_connect_error());
}
?>