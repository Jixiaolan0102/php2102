<?php
    include '../pdo.php';            //连接数据库
    $get =isset($_GET['cid']) ? intval($_GET['cid']) : 0;
    $sql ="delete from lianxi where cid=?";      // 删除指定的id
    $stmt =$dbh->prepare($sql);                  //准备sql语句
    $stmt->bindParam(1,$get);     //参数绑定
    $stmt->execute();                //执行sql
    if($stmt->rowCount()){              //判断受影响的行数
        echo "删除成功";
        echo "正在跳转";
        header('refresh:2;url=inseat2.php');
    }else{
        echo "删除失败";
    }




