<html>

<head>
    <meta charset="utf-8">
</head>

<style type="text/css">
    body{
        margin-top: 100px;
        margin-right: 300px;
        margin-left: 300px;
    }

    table{
        font-size: 25px;
    }
    input[type="text"]{
        height: 30px;
    }

    input[type="reset"]{
        height: 30px;
    }
    input[type="submit"]{
        margin-top: 8px;
        height: 30px;
    }
</style>

<body bgcolor="#add8e6">
<form method="get" action="">
    <table width="90%" height="173" border="1" align="center" cellpadding="2" cellspacing="1">
        <tr>
            <td height="27" colspan="7" align="left" bgcolor="#FFFFFF" >&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;新书上线</td>
        </tr>

        <tr>
            <td width="31%" align="right" >ID：</td>
            <td width="69%" >
                <input name="id" type="text" id="id" size="15" maxlength="30" />
            </td>
        </tr>

        <tr>
            <td width="31%" align="right" >书名：</td>
            <td width="69%" >
                <input name="name" type="text" id="name" size="15" maxlength="30" />
            </td>
        </tr>
        <tr>
            <td align="right" >价格：</td>
            <td >
                <input name="price" type="text" id="price" size="5" maxlength="15" />
            </td>
        </tr>
        <tr>
            <td align="right" >日期：</td>
            <td >
                <input name="uptime" type="text" id="uptime" value="<?php echo date("Y-m-d H:i:s"); ?>" />
            </td>
        </tr>
        <tr>
            <td align="right" >所属类别：</td>
            <td >
                <input name="type" type="text" id="type" size="6" maxlength="19" />
            </td>
        </tr>
        <tr>
            <td align="right" >入库总量：</td>
            <td ><input name="total" type="text" id="total" size="5" maxlength="15" />
                本</td>
        </tr>

        <tr>
            <td align="right">位置：</td>
            <td >
                <input name="local" type="text" id="local" size="6" maxlength="19" />
            </td>
        </tr>
        <tr>
            <td align="right" >
                <input type="submit" name="submit" id="submit" value="提交" />
            </td>
            <td >　　
                <input type="reset" name="reset" id="reset" value="重置" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8");
include"db.php";
if(isset($_GET['submit'])) {
    if (empty($_GET['id']) or empty($_GET['name']) or empty($_GET['price']) or empty($_GET['type']) or empty($_GET['total'])) {
        echo "<div align='center' id='div'>输入不可为空！</div>";
    } else {
        $sql = "select * from book WHERE id='" . $_GET["id"] . "'";
        $data = $conn->query($sql) or die("<br><div id='div'>访问数据错误！</div>");
        $rec_count = $data->fetch_row();
        if ($rec_count > 0) {
            die("<div align='center' id='div'>该书已经存在！</div>");
        } else {
            $sql = "insert into book 
VALUES ('" . $_GET['id'] . "','" . $_GET['name'] . "','" . $_GET['price'] . "','" . $_GET['uptime'] . "'
,'" . $_GET['type'] . "','" . $_GET['total'] . "','" . $_GET['local'] . "')";

            $data = $conn->query($sql) or die("<br><div id='div'>书籍添加失败！</div>");
            print "<div align='center' id='div'>书籍添加成功！</div>";
        }
    }
}
?>