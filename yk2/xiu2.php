<?php
    include '../quan.php';
    $q_id =$_POST['q_id'];
    $name =$_POST['name'];
    $man =$_POST['man'];
    $sql ="update question_bank set q_name='$name',q_man='$man' where q_id='$q_id'";
    $stmt =mysqli_query($link,$sql);
    if($stmt){
        echo "修改成功";
        header('refresh:2;url=yk2.php');
        die;
    }else{
        echo "修改失败";
        die;
    }


