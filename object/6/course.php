<?php
    include  '../../quan.php';
    if($_POST){
        $name =$_POST['name'];
        $price =$_POST['price'];
        $ser =$_POST['ser'];
        $teacher =$_POST['teacher'];
        $sql ="insert into course(`name`,`price`,`ser`,`teacher`)
        values('{$name}','{$price}','{$ser}','{$teacher}')";
        $stmt =mysqli_prepare($link,$sql);
        $red =mysqli_stmt_execute($stmt);
        if($red){
            echo "添加成功";
            header('refresh:2;url=coures2.php');
            die;
        }else{
            echo "添加失败";
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
    <form action="course.php" method="post">
        <table>
            <tr>
                <td>课程名称</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>课程价格</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>是否连载</td>
                <td><input type="radio" name="ser" value="是">是
                    <input type="radio" name="ser" value="否">否
                </td>
            </tr>
            <tr>
                <td>课程讲师</td>
                <td><input type="text" name="teacher"></td>
            </tr>
            <tr>
                <td><input type="submit" value="添加"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>
