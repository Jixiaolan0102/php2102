<?php
    if($_POST){
        include '../quan.php';
        $id =$_POST['id'];
        $name =$_POST['sname'];
        $tes =$_POST['tes'];
        $pacite =$_POST['pacite'];
        $times =$_POST['times'];
        mysqli_query($link,"set names utf8");
        $sql ="insert into good (`id`,`sname`,`tes`,`pacite`,`times`)
        values('{$id}','{$name}','{$tes}','{$pacite}','{$times}')";
        // echo '<pre>'print_r($sql); echo '</pre>';die;
        // var_dump($sql);die;
        $stmt = mysqli_query($link,$sql);
        // $red = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
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
    <form action="aoo.php" method="post">
    商品id<input type="text" name="id"> <br>
    商品名<input type="text" name="sname"> <br>
    商品介绍<input type="text" name="tes"> <br>
    商品价格<input type="text" name="pacite"> <br>
    存入商品时间<input type="text" name="times"><br>
    <input type="submit" value="添加">
    </form>
</body>
</html>