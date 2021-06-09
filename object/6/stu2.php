<?php
$ar =$_GET['stu_id'];
include '../../quan.php';
$stmt ="delete from studebt where stu_id=$ar";
$red =mysqli_query($link,$stmt);
if($red){
    echo "删除成功";
    header('refresh:2;url=stu.php');
}else{
    echo "删除失败";
}