<?php
session_start();
//header("Content-type:text/html;charset=utf-8");

$link = mysqli_connect('127.0.0.1','root','789456','mydb');

if (!$link) {
    die("����ʧ��:".mysqli_connect_error());
}
$sql="select * from user where username='".$_GET['username']."'and password='".$_GET['password']."'";
$username = $_GET["username"];
$password = $_GET["password"];
$code = $_GET["code"];
if ($username=="" and $password=="")
{
    echo"<script type='text/javascript'>alert('�û��������벻��Ϊ��');location.href='44.html';</script>";
}
if($username == "")
{
    echo"<script type='text/javascript'>alert('����д�û���');location.href='44.html'; </script>";
}

if($password == "")
{
    echo"<script type='text/javascript'>alert('����д����');location.href='44.html';</script>";
}

if($code=="")
{
    echo"<script type='text/javascript'>alert('��֤�벻��Ϊ��');location.href='44.html';</script>";
}

if($code != $_SESSION['authcode'])
{
    echo "<script type='text/javascript'>alert('��֤�����!');location.href='44.html';</script>";
}

$result=mysqli_query($link,$sql);
$rows=mysqli_fetch_array($result);
if($rows) {
    echo"<script>location.href='7878.html'</script>";
}
else
{
    echo"<script>alert('�û������������,���������룡');location.href='44.html'
</script>";

}
?>