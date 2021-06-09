<?php
    $get =$_GET['id'];      //接受传参
    include  '../../quan.php';    //连接数据库
    $sql ="select * from course where id=$get";
//    var_dump($sql);die;
    $stmt =mysqli_query($link,$sql);
    $red =mysqli_fetch_all($stmt,MYSQLI_ASSOC);
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
<form action="coures5.php" method="post">
    <input type="hidden" name="id" value="<?php echo $red[0]['id']?>">
    <table>
        <tr>
            <td>课程名称</td>
            <td><input type="text" name="name" value="<?php echo $red[0]['name']?>"></td>
        </tr>
        <tr>
            <td>课程价格</td>
            <td><input type="text" name="price" value="<?php echo $red[0]['price']?>"></td>
        </tr>
        <tr>
            <td>是否连载</td>
            <td><input type="radio" name="ser" value="是" <?php if($red[0]['ser']=="是"){echo "checked";}?>>是
                <input type="radio" name="ser" value="否" <?php if($red[0]['ser']=="否"){echo "checked";}?>>否

            </td>
        </tr>
        <tr>
            <td>课程讲师</td>
            <td><input type="text" name="teacher" value="<?php echo $red[0]['teacher']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>
