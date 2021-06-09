<?php
    if($_POST){
    include '../quan.php';
    $cid = $_POST['cid'];
    $cname =$_POST['cname'];
    $ctel =$_POST['ctel'];
    $pass =$_POST['pass'];
    $password =$_POST['password'];
    $sql ="insert into lianxi (`cid`,`cname`,`ctel`,`pass`,`password`)
    values('{$cid}','{$cname}','{$ctel}','{$pass}','{$password}')";
    // echo '<pre>';print_r($sql); echo'</pre>';die;
    $stme = mysqli_prepare($link,$sql);
    $red = mysqli_stmt_execute($stme);
    // echo '<pre>';print_r($red); echo'</pre>';die;
    if($red){
        echo "成功";
        // header('Refresh:2;url=deng.html');
        echo "正在跳转登录页面";
        header('Refresh:2;url=deng.html');
    }else{
        echo '失败';
    }
    die;
}

?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zhu.php" method="post">
        注册id:<input type="text" name="cid"><br>
        注册名称:<input type="text" name="cname"><br>
        注册手机号:<input type="text" name="ctel"><br>
        注册密码:<input type="password" name="pass"><br>
        确认密码:<input type="password" name="password"><br>
        <input type="submit" value="提交">
    </from>
</body>
</html>