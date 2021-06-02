<?php
    $ar = $_GET['id'];  //获取个人中心传过来的值
    // echo $ar;
    include 'quan.php';  //连接数据库
    $stmt ="delete from login_history where id=$ar";  //删除语句
    //执行
    $sql = mysqli_query($link,$stmt);
    if($sql){
        echo "成功";
        header('Refresh:2;url=my.php');
    }else{
        echo"失败";
    }
