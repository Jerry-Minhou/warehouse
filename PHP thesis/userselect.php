

<html>
<head>
    <meta charset="utf-8">
</head>
<style type="text/css">
    body{
        margin-top: 50px;
        margin-right: 100px;
        margin-left: 100px;
    }

    table{
        font-size: 17px;
    }

    input[type="text"]{
        height: 30px;
    }

    select{
        height: 30px;
    }
</style>
<body bgcolor="#add8e6">
<table width="95%" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
        <td width="95%" height="27" valign="top" bgcolor="#FFFFFF">&nbsp;用户前端&nbsp;&gt;&gt;&nbsp;书籍查询</td>
    <tr>
        <td height="27" valign="top" bgcolor="#FFFFFF">
            <form id="form1" name="form1" method="get" action="" style="margin:0px; padding:0px;">
                <table width="45%" height="42" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="36%" align="center">
                            <select name="seltype" id="seltype">
                                <option value="name">图书名称</option>
                                <option value="price">图书价格</option>
                                <option value="type">图书类别</option>
                                <option value="local">位置</option>
                            </select>
                        </td>
                        <td width="31%" align="center">
                            <input type="text" name="coun" id="coun" />
                        </td>
                        <td width="33%" align="center">
                            <input type="submit" name="submit" id="button" value="查询" />
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
<?php
if(isset($_GET["submit"])) {
    header('Content-Type:text/html;charset=utf-8 ');
    include "page.cless.php";
    include("config1.php");
    $outcome = mysqli_query($online, "SELECT * FROM book");
    $total = mysqli_num_rows($outcome);
    $num = 2;
    $page = new Page($total, $num, "");
    $sql = "select * from book {$page->limit}";
    $outcome = mysqli_query($online, $sql);
    $coun = $_GET["coun"];
    $sql = "select * from book where " . $_GET['seltype'] . " like ('%" . $coun . "%')";
    $rs = mysqli_query($online, $sql) or die("请输入查询条件!!!");
    $recordcount = mysqli_num_rows($outcome);
    //mysql_num_rows() 返回结果集中行的数目。此命令仅对 SELECT 语句有效
    echo '<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">';
    echo "<tr>";

    echo "<td width='25%' align='center' bgcolor='#FFFFFF'>" . "书名" . "</td>";
    echo "<td width='11%' align='center' bgcolor='#FFFFFF'>" . "价格" . "</td>";
    echo "<td width='11%' align='center' bgcolor='#FFFFFF'>" . "类型" . "</td>";
    echo "<td width='15%' align='center' bgcolor='#FFFFFF'>" . "位置" . "</td>";
    echo "</tr>";
    while ($sql = mysqli_fetch_array($rs)) {
        echo "<tr align='center'>";
        $id = $sql['id'];
        echo "<td width='25%' height='26'>" . $sql['name'] . "</td>";
        echo "<td width='11%' height='26'>" . $sql['price'] . "</td>";
        echo "<td width='11%' height='26'>" . $sql['type'] . "</td>";
        echo "<td width='15%' height='26'>" . $sql['local'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>