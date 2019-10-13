<?php
include("config.php");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>书籍统计</title>
    <style type="text/css">
        table{
            font-size: 20px;
            margin-top: 100px;
        }
    </style>
</head>
<body bgcolor="#add8e6">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor='#CCCCCC' >
    <tr>
        <td height="27" colspan="2" align="left" bgcolor="#FFFFFF">&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;书籍统计</td>
    </tr>
    <tr>
        <td align="center"  height="27">图书类别</td>
        <td align="center" >库内图书</td>
    </tr>
    <?php
    $sql="select type, count(*) from book group by type";
    $val=mysqli_query($link,$sql);
    while($arr=mysqli_fetch_row($val)){
        echo "<tr height='30'>";
        echo "<td align='center'>".$arr[0]."</td>";
        echo "<td align='center'>本类目共有：".$arr[1]."&nbsp;种</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>