<?php
    $ar =$_GET['q_id'];
    include '../quan.php';
    $stmt ="delete from question_bank where q_id=$ar";
    $red =mysqli_query($link,$stmt);
    if($red){
        echo "删除成功";
        header('refresh:2;url=yk2.php');
    }else{
        echo "删除失败";
    }
?>