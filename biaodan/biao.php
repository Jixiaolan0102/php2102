<?php
    echo '<pre>';print_r($_POST);'</pre>';
    include 'quan.php';
    $uname = trim($_POST['name']);
    $uemail = trim($_POST['email']);
    $umobile = trim($_POST['mobile']);
    $uyear = trim($_POST['year']);
    $uapass = trim($_POST['pass']);
    $upassword = trim($_POST['password']);
    $reg_time = time();
    // $upass = password_hash($uapass,PASSWORD_DEFAULT);
    //输入值跟返回值相等
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
     