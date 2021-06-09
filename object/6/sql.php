<?php
    // include '../../quan.php';
    $host ="127.0.0.1";       //数据库地址
    $db ='php2102';             //数据库名
    $user ='root';            //数据库用户名
    $pass = 'root';             // 数据库的用户密码
    $dbh = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);
    
    // var_dump($get);
    // $sql ="select * from from1 where id=?";
    $sql = "select user_id,user_name from p_users where user_id= ?";
    // var_dump($sql);
    // $stmt = mysqli_query($link,$sql);
    // $red =mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    // var_dump($red);


    //pdo
    //预处理
    $stmt =$dbh->prepare($sql);

    //执行sql语句
    $get = $_GET['id'];
    $red =$stmt->execute([$get]);       //传参数


    //获取错误信息
    $err_code = $stmt->errorCode();        //获取  statement  错误码
    var_dump($err_code);
    $err_msg =$stmt->errorInfo();         //获取  statement   错误信息
    var_dump($err_msg);

    //查询结果
    var_dump($red);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';print_r($rows);echo '</pre>';
    