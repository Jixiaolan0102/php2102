<?php
    echo '<pre>';print_r($_POST);'</pre>';
     $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库

    $link = new mysqli($host,$user,$pass,$db);

    $uname = trim($_POST['name']);
    $uemail = trim($_POST['email']);
    $umobile = trim($_POST['mobile']);
    $uyear = trim($_POST['year']);
    $uapass = trim($_POST['pass']);
    $upassword = trim($_POST['password']);
    $reg_time = time();
    // $upass = password_hash($uapass,PASSWORD_DEFAULT);

    $sql = "insert into biao (`name`,`email`,`mobile`,`year`,`pass`,`password`,`reg_time`)
     values('{$uname}','{$uemail}','{$umobile}','{$uyear}','{$uapass}','{$upassword}',$reg_time)";
    //  echo $sql;die;
        //准备阶段
        $stmt= mysqli_prepare($link,$sql);
        // 执行阶段
         $resule = mysqli_stmt_execute($stmt);
          if($resule){
            echo "insert 成功";
         }else{
             echo "insert 失败";
         }
        // $sql = "select * from biao";
        // $result = mysqli_query($link,$sql);
        // $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        // echo "<pre>";print_r($rows);echo"</pre>";
     