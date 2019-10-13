<?php
session_start();
//header("Content-type:text/html;charset=utf-8");

$link = mysqli_connect('127.0.0.1','root','789456','mydb');

if (!$link) {
    die("连接失败:".mysqli_connect_error());
}
$sql="select * from user where username='".$_GET['username']."'and password='".$_GET['password']."'";
$username = $_GET["username"];
$password = $_GET["password"];
$code = $_GET["code"];
if ($username=="" and $password=="")
{
    echo"<script type='text/javascript'>alert('用户名和密码不得为空');location.href='44.html';</script>";
}
if($username == "")
{
    echo"<script type='text/javascript'>alert('请填写用户名');location.href='44.html'; </script>";
}

if($password == "")
{
    echo"<script type='text/javascript'>alert('请填写密码');location.href='44.html';</script>";
}

if($code=="")
{
    echo"<script type='text/javascript'>alert('验证码不得为空');location.href='44.html';</script>";
}

if($code != $_SESSION['authcode'])
{
    echo "<script type='text/javascript'>alert('验证码错误!');location.href='44.html';</script>";
}

$result=mysqli_query($link,$sql);
$rows=mysqli_fetch_array($result);
if($rows) {
    echo"<script>location.href='7878.html'</script>";
}
else
{
    echo"<script>alert('用户名或密码错误,请重新输入！');location.href='44.html'
</script>";

}
?>