<html>
<head>
    <title>图书后台管理</title>
    <meta charset="UTF-8" />
    <style type="text/css">
        td
        {
            height:25px;
        }

        body{
            margin-top: 50px;

        }

        table{
            font-size: 18px;
        }
    </style>

    <script language="javascript">

        function delcfm() {

            if (!confirm("确认要删除？")) {

                window.event.returnValue = false;

            }

        }

    </script>
</head>
<body bgcolor="#add8e6">

<?php
header( 'Content-Type:text/html;charset=utf-8 ');
include "page.cless.php";
include("config1.php");
$outcome= mysqli_query($online,"SELECT * FROM book");
$total = mysqli_num_rows($outcome);
$num = 8;
$page = new Page($total,$num,"");
$sql = "select * from book {$page->limit}";
$outcome = mysqli_query($online,$sql);
echo '<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">';
echo "<tr>
        <td height='27' colspan='8' align='left' bgcolor='#FFFFFF'>&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;书籍管理</td>
    </tr>";
echo "<tr>";
echo "<td width='6%'  align='center' bgcolor='#FFFFFF'>"."ID"."</td>";
echo "<td width='15%' align='center' bgcolor='#FFFFFF'>"."书名"."</td>";
echo "<td width='11%' align='center' bgcolor='#FFFFFF'>"."价格"."</td>";
echo "<td width='16%' align='center' bgcolor='#FFFFFF'>"."入库时间"."</td>";
echo "<td width='11%' align='center' bgcolor='#FFFFFF'>"."类型"."</td>";
echo "<td width='11%' align='center' bgcolor='#FFFFFF'>"."入库总量"."</td>";
echo "<td width='11%' align='center' bgcolor='#FFFFFF'>"."位置"."</td>";
echo "<td width='19%' align='center' bgcolor='#FFFFFF'>"."操作"."</td>";
echo "</tr>";
while($sql = mysqli_fetch_array($outcome))
{
    echo "<tr align='center'>";
    $id = $sql['id'];
    echo "<td width='6%'>".$sql['id']."</td>";
    echo "<td width='25%' height='26'>".$sql['name']."</td>";
    echo "<td width='11%' height='26'>".$sql['price']."</td>";
    echo "<td width='16%' height='26'>".$sql['uploadtime']."</td>";
    echo "<td width='11%' height='26'>".$sql['type']."</td>";
    echo "<td width='11%' height='26'>".$sql['total']."本</td>";
    echo "<td width='11%' height='26'>".$sql['local']."</td>";
    echo "<td>"."<a href="."'"."delete.php?id=".$id."& name=".$sql['name']."'"." onclick='delcfm()'>&nbsp;&nbsp;删除&nbsp;|&nbsp;</a>";
    echo "<a href="."'"."update.php?id=".$id."& name=".$sql['name']."'".">修改&nbsp;&nbsp;</a></td>";
    echo "</tr>";
}
echo "<tr><td colspan = '9' align = 'center'>".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
echo "</table>";
mysql_close($online);
?>
</body>
</html>
