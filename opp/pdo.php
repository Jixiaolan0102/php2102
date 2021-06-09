<?php
    include '../pdo.php';      //链接数据库
    //拼装sql语句
    $sql ="select user_id,user_name from p_users where user_id= ?";
    echo '<pre>';print_r($sql); echo '</pre>';

    //预处理
    $stmt = $dbh->prepare($sql);

    //查询s
    $id = $_GET['id'];
//    $name = $_GET['name'];
    $res = $stmt->execute([$id]);
    var_dump($res);

    //获取错误信息  错误码  错误信息
    $err_code = $stmt->errorCode();    //获取错误码
    if($err_code != '00000'){
        echo "1111";
        $err_msg =$stmt->errorInfo();     //获取错误信息
        echo  "22".$err_msg;
        die;
    }

    //获取数据
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);     //获取多条数据   fectchAll()
    echo '<pre>';print_r($rows); echo '</pre>';