<?php
include("config.php");
$sql = "DELETE FROM book where name='".$_GET['name']."'";
$arry=mysqli_query($link,$sql);
if($arry){
    echo "<script> alert('删除成功');location='newbookmanage.php';</script>";
}
else
    echo "删除失败";
?>