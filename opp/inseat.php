<?php
    include  '../pdo.php';     //连接数据库
    if($_POST){                //接受表单数据
//        var_dump($_POST);
    $name =$_POST['name'];
    $ctel =$_POST['ctel'];
    $pass =$_POST['pass'];
    $password =$_POST['password'];
    if($pass==$password){      //密码加密
        $pass =password_hash($password,PASSWORD_BCRYPT);
    }
    $sql ="insert into lianxi (`cname`,`ctel`,`pass`,`password`)values(?,?,?,?)";    //把表单数据添加到数据库

    //预处理
        $stmt = $dbh->prepare($sql);
        //绑定参数
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$ctel);
        $stmt->bindParam(3,$pass);
        $stmt->bindParam(4,$password);
        //执行sql
        $stmt->execute();
        //判断错误
        $err_code = $stmt->errorCode();
        if($err_code !== '0000'){
            $err_info = $stmt->errorInfo();
            echo $err_info[2];
//            die;
        }
        //查看受影响的行数
        $affect_rows = $stmt->rowCount();
//        echo "受影响的行数".$affect_rows;
        if($affect_rows>0){
            echo "注册成功";
            echo '<br>';
            echo "正在跳转";
            header('refresh:2;url=inseat2.php');
        }else{
            echo "注册失败";
        }
    die;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="inseat.php" method="post">
        名字<input type="text" name="name"><br>
        手机号<input type="text" name="ctel"><br>
        密码<input type="password" name="pass"><br>
        确认密码<input type="password" name="password"><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>
