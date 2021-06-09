<?php
$ar =$_GET['id'];
include '../../quan.php';
$stmt ="delete from course where id=$ar";
$red =mysqli_query($link,$stmt);
if($red){
    echo "删除成功";
    header('refresh:2;url=coures2.php');
}else{
    echo "删除失败";
}

