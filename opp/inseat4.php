<?php
    $get =$_GET['cid'];         //接受传参
    include '../pdo.php';       //连接数据库
    $sql ="select * from lianxi where cid={$get}";         //根据id找到这行数据
    $stmt =$dbh->query($sql);                               //执行
//    $stmt->bindParam(1,$_GET['cid']);
//    $red =$stmt->execute();
    $red =$stmt->fetch(PDO::FETCH_ASSOC);            //二维数组
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
    <form action="inseat5.php" method="post">
        <input type="hidden" name="cid" value="<?php echo  $red['cid']?>">
        名字<input type="text" name="name" value="<?php echo $red['cname']?>"><br>
        手机号<input type="text" name="ctel" value="<?php echo $red['ctel']?>"><br>
        密码<input type="password" name="pass" value="<?php echo $red['pass']?>"><br>
        <input type="submit" value="修改">
    </form>
</body>
</html>
