<?php
    $get =$_GET['stu_id'];      //接受传参
    include  '../../quan.php';    //连接数据库
    $sql ="select * from studebt where stu_id=$get";
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
<form action="stu4.php" method="post">
    <input type="hidden" name="stu_id" value="<?php echo $red[0]['stu_id']?>">
    <table>
        <tr>
            <td>学生姓名</td>
            <td><input type="text" name="name" value="<?php echo $red[0]['name']?>"></td>
        </tr>
        <tr>
            <td>学生年龄</td>
            <td><input type="text" name="age" value="<?php echo $red[0]['age']?>"></td>
        </tr>
        <tr>
            <td>学生班级</td>
            <td><select name="score" value="<?php echo $red[0]['score']?>">
                    <option>1405phpa</option>
                    <option>php2102</option>
                </select></td>
        </tr>
        <tr>
            <td>学生成绩</td>
            <td><input type="text" name="class" value="<?php echo $red[0]['class']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>
