<?php
    include  '../../quan.php';
    $id =$_POST['id'];
    $name =$_POST['name'];
    $price =$_POST['price'];
    $ser =$_POST['ser'];
    $teacher =$_POST['teacher'];
    $sql ="update course set name='$name',price='$price',ser='$ser',teacher='$teacher' where id=$id";
//    var_dump($sql);die;
    $stmt =mysqli_query($link,$sql);
    if($stmt){
        echo "修改成功";
        header('refresh:2;url=coures2.php');
        die;
    }else{
        echo "修改失败";
    }
