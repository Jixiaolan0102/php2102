<?php

    include  '../../quan.php';
    $id =$_POST['stu_id'];
//    echo $id;
    $name =$_POST['name'];
    $price =$_POST['age'];
    $ser =$_POST['score'];
    $teacher =$_POST['class'];
    $sql ="update studebt set name='$name',age='$price',score='$ser',class='$teacher' where stu_id=$id";
//        var_dump($sql);die;
    $stmt =mysqli_query($link,$sql);
    if($stmt){
        echo "修改成功";
        header('refresh:2;url=stu.php');
        die;
    }else{
        echo "修改失败";
    }
