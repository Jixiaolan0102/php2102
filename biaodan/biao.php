<?php
    if($_POST){
        echo '<pre>';print_r($_POST);'</pre>';
 
    
    include 'quan.php';
    $uname = trim($_POST['name']);
    $uemail = trim($_POST['email']);
    $umobile = trim($_POST['mobile']);
    $uyear = trim($_POST['year']);
    $uapass = trim($_POST['pass']);
    $upassword = trim($_POST['password']);
    $usits = trim($_POST['sits']);
    $reg_time = time();
    // $upass = password_hash($uapass,PASSWORD_DEFAULT);
    mysqli_query($link,"set names utf8");
    //输入值跟返回值相等
    $sql = "insert into biao (`name`,`email`,`mobile`,`year`,`pass`,`password`,`reg_time`,`address`)
     values('{$uname}','{$uemail}','{$umobile}','{$uyear}','{$uapass}','{$upassword}',$reg_time,'{$usits}')";
    //  echo $sql;die;
        //准备阶段
        $stmt= mysqli_prepare($link,$sql);
        // 执行阶段
         $resule = mysqli_stmt_execute($stmt);
          if($resule){
            echo "insert 成功";
            header('Refresh:2;url=login.php');
         }else{
             echo "insert 失败";
         }
         die;
        }
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="biao.php" method="POST">
        <input type="text" name="name" placeholder="用户名"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="mobile" name="mobile" placeholder="手机号"><br>
        <input type="text" name="year" placeholder="年龄"><br>
        <input type="text" name="sits" placeholder="住址"><br>
        <input type="password" name="pass" placeholder="密码"><br>
        <input type="password" name="password" placeholder="确认密码"><br>
        <input type="reset" value="重置">
        <input type="submit" value="提交">
    </form>
</body>
</html>