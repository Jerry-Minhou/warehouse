
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>管理员密码修改</title>
    <style>
        form{
            margin-left: 300px;
        }
        table{
            border-color: #63b8ff;
            font-size: 25px;
            margin-top: 100px;
            margin-right: 700px;

        }

        input[type='Submit']{
            margin-right: 100px;
            width: 50px;
            height: 30px;
        }

        input[type='reset']{
            margin-left: 100px;
            width: 50px;
            height: 30px;
        }

        input[type='password'],input[type='text']{
            height: 35px;
            width: 490px;
        }
    </style>
</head>
<body align="center" bgcolor="#add8e6">
<?php
include "config.php";
if (isset($_GET["Submit"])){
$password = $_GET["password"];
$sql = "SELECT * FROM user where password='$password'";
$rs = mysqli_query($link,$sql);
$rows = mysqli_fetch_assoc($rs);
$submit = isset($_GET["Submit"])?$_GET["Submit"]:"";
if($submit)
{
    if($rows["password"]==$_GET["password"])
    {
        $password2=$_GET["password2"];
        $sql = "UPDATE user SET password='$password2'";
        mysqli_query($link,$sql);
        echo "<script>alert('修改成功,请重新进行登陆！');window.location='44.html'</script>";
        exit();
    }
    else
        ?>
        <?php
    {
        ?>
        <script>
            alert("原始密码不正确,请重新输入")
        </script>
        <?php

    }
}
}
?>
<form name="renpassword" method="get" action="">
    <table border="1" cellspacing="0" align="center" width="700px">

    <tr>
        <td colspan="2" bgcolor="#191970" align="center"><font color="white">更改管理员密码</font></td>
    </tr>

        <tr>
            <td bgcolor="#87cefa" align="right">请输入旧密码：</td>
            <td class="td_bg"><input name="password" type="password" id="password"></td>
        </tr>
        <tr>
            <td bgcolor="#87cefa" align="right">请输入新密码：</td>
            <td class="td_bg"><input name="password1" type="password" id="password1"></td>
        </tr>
        <tr>
            <td bgcolor="#87cefa" align="right">再次输入新密码：</td>
            <td class="td_bg"><input  name="password2" type="password" id="password2"></td>
        </tr>
        <tr>
            <td colspan="2" width="400px" bgcolor="#add8e6" align="center">
                <input class="button" onClick="return check();" type="submit" name="Submit" value="更改">
                <input type="reset" name="reset" value="重置">
            </td>
        </tr>

</table>
</form>
</body>
</html>
<script type="text/javascript">
    <!--
    function checkspace(checkstr) {
        var str = '';
        for(i = 0; i < checkstr.length; i++) {
            str = str + ' ';
        }
        return (str == checkstr);
    }
    function check()
    {
        if(checkspace(document.renpassword.password.value)) {
            document.renpassword.password.focus();
            alert("原密码不能为空！");
            return false;
        }
        if(checkspace(document.renpassword.password1.value)) {
            document.renpassword.password1.focus();
            alert("新密码不能为空！");
            return false;
        }
        if(checkspace(document.renpassword.password2.value)) {
            document.renpassword.password2.focus();
            alert("确认密码不能为空！");
            return false;
        }
        if(document.renpassword.password1.value != document.renpassword.password2.value) {
            document.renpassword.password1.focus();
            document.renpassword.password1.value = '';
            document.renpassword.password2.value = '';
            alert("新密码和确认密码不相同，请重新输入");
            return false;
        }
        document.admininfo.submit();
    }
    //-->
</script>