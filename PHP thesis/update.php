<?php
include "config.php";
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书管理系统新书修改</title>
    <style type="text/css">
        table{
            font-size: 25px;
        }

        input[type="text"]{
            height: 30px;
            font-size: 25px;
        }

    </style>
    <script type="text/javascript">
        <!--
        function myform_Validator(theForm)
        {

            if (theForm.name.value == "")
            {
                alert("请输入书名。");
                theForm.name.focus();
                return (false);
            }
            if (theForm.price.value == "")
            {
                alert("请输入书名价格。");
                theForm.price.focus();
                return (false);
            }
            if (theForm.type.value == "")
            {
                alert("请输入书名所属类别。");
                theForm.type.focus();
                return (false);
            }
            return (true);
        }

        //--></script>

    <script language="javascript">

        function delcfm() {

            if (!confirm("确认要修改？")) {

                window.event.returnValue = false;

            }

        }

    </script>
</head>
<?php
$sql="select * from book where name='".$_GET['name']."'";
$arr=mysqli_query($link,$sql);
$rows=mysqli_fetch_row($arr);
//mysqli_fetch_row() 函数从结果集中取得一行，并作为枚举数组返回。一条一条获取，输出结果为$rows[0],$rows[1],$rows[2].......
?>
<?php
if(isset($_GET['action'])){
    $sqlstr = "update book set name = '".$_GET['name']."', price = '".$_GET['price']."', uploadtime = '".$_GET['uptime']."', type = '".$_GET['type']."', total = '".$_GET['total']."',  = '".$_GET['local']."' where name='".$_GET['name']."'";
    $arry=mysqli_query($link,$sqlstr);
    if ($arry){
        echo "<script> alert('修改成功');location='newbookmanage.php'</script>";
    }
    else{
        echo "<script>alert('修改失败');history.go(-1);</script>";
    }
}
?>
<body bgcolor="#add8e6">
<form id="myform" name="myform" method="get" action="" onSubmit="return myform_Validator(this)">
    <table width="100%" height="173" border="0" align="center" cellpadding="2" cellspacing="1">
        <tr>
            <td colspan="2" align="left">&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;新书修改</td>
        </tr>

        <tr>
            <td width="31%" align="right" >书名：</td>
            <td width="69%">
                <input name="name" type="text" id="name" value="<?php echo $rows[1] ?>" size="15" maxlength="30" />
            </td>
        </tr>
        <tr>
            <td align="right" >价格：</td>
            <td >
                <input name="price" type="text" id="price" value="<?php echo  $rows[2]; ?>" size="5" maxlength="15" />
            </td>
        </tr>
        <tr>
            <td align="right">入库时间：
            </td>
            <td >
                <label>
                    <input name="uptime" type="text" id="uptime" value="<?php echo $rows[3] ; ?>" size="17" />
                </label>
            </td>
        </tr>
        <tr>
            <td align="right">所属类别：
            </td>
            <td ><label>
                    <input name="type" type="text" id="type" value="<?php echo $rows[4]; ?>" size="10" maxlength="19" />
                </label></td>
        </tr>
        <tr>
            <td align="right">入库总量：</td>
            <td ><input name="total" type="text" id="total" value="<?php echo  $rows[5]; ?>" size="5" maxlength="15" />
                本</td>
        </tr>

        <tr>
            <td align="right">位置：</td>
            <td ><input name="total" type="text" id="" value="<?php echo  $rows[6]; ?>" size="5" maxlength="15" />
                </td>
        </tr>
        <tr>
            <td align="right">
                <input type="hidden" name="action" value="modify">
                <input type="submit" name="button" id="button" value="提交" onclick="delcfm()"/></td>
            <td >　　
                <input type="reset" name="button2" id="button2" value="重置"/></td>
        </tr>
    </table>
</form>
</body>
</html>