<!DOCTYPE html>
<html>
<head>
    <title>留言板</title>
    <meta charset="UTF-8"/>
    <style type="text/css">
        a{
            text-decoration: none;
            font-size: 22px;
        }
        a:active{
            color:black;

        }
        a:hover{
            color: red;
        }
        input[type="submit"]{
            height: 40px;
            width: 70px;
        }

        input[type="text"]{
            height: 30px;
            width: 150px;
        }
    </style>
</head>
<body>
<form method="get" action="">
    <table align="center">
        <caption><h1>留言板</h1></caption>
        <tr><td><textarea name="message" rows="15" cols="150" ></textarea></td></tr>
        <tr><td height="70px"></td></tr>
        <tr>
            <td>日期：<input name="time" type="text" id="time" value="<?php echo date('Y-m-d H:i:s'); ?>" /></td>

        </tr>
        <tr><td height="80px"></td></tr>
        <tr><td align="center"><input type="submit" value="提交" name="submit" /></td></tr>
        <tr><td></td></tr>
        <tr><td align="center" height="100px"><a href="user.php">返回主页</a></td></tr>
    </table>
</form>
</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8");
include"db.php";
if(isset($_GET['submit'])) {
    if (empty($_GET['message'])) {
        echo "<div align='center' id='div'>输入不可为空！</div>";
    } else {
        $sql = "select * from board ";
        $data = $conn->query($sql) or die("<br><div id='div'>访问数据错误！</div>");
            $sql = "insert into  board VALUES ('" . $_GET['message'] . "','" . $_GET['time'] . "')";
            $data = $conn->query($sql) or die("<br><div id='div'>留言添加失败！</div>");
            echo"<script type='text/javascript'>alert('留言添加成功');window.location='mes_into.php'</script>";
    }
}
?>