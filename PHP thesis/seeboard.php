<!DOCTYPE html>
<html>
<head>
    <title>留言板查看</title>
    <meta charset="UTF-8" />
    <style type="text/css">
        td
        {
            height: 25px;
        }
        .ree
        {
            font-size: 20px;
            margin: 10px 0px 0px 190px;
        }
        table{
            font-size: 20px;
            margin-left: 150px;
            margin-top: 100px;
        }
    </style>
</head>
<body bgcolor="#add8e6">
<?php
include("config1.php");
$sql="SELECT * FROM board";
$outcome = mysqli_query($online, $sql);
$rs = mysqli_query($online, $sql);
echo"<table bgcolor='#CCCCCC' width='80%'>";
echo"<tr>";
echo"<td colspan='2' align='left' bgcolor='#FFFFFF'>&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;查看留言</td>";
 echo"</tr>";
echo "<tr>";
echo "<td width='11%' align='center' bgcolor='#FFFFFF'>" . "留言内容" . "</td>";
echo "<td width='15%' align='center' bgcolor='#FFFFFF'>" . "留言时间" . "</td>";
echo "</tr>";

while ($sql = mysqli_fetch_array($rs)) {
echo "<tr align='center'>";
    echo "<td width='11%' height='26' >" . $sql['message'] . "</td>";
    echo "<td width='15%' height='26'>" . $sql['time'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>