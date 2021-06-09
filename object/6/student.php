<?php
    if($_POST){
    include '../../quan.php';
    $name =$_POST['name'];
    $age =$_POST['age'];
    $score =$_POST['score'];
    $class =$_POST['class'];
    $sql ="insert into studebt(`name`,`age`,`score`,`class`)
    values('{$name}','{$age}','{$score}','{$class}')";
    $stmt =mysqli_prepare($link,$sql);
    $red =mysqli_stmt_execute($stmt);
    if($stmt){
        echo "添加成功";
        header('refresh:2;url=stu.php');
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
    <form action="student.php" method="post">
        <table>
            <tr>
                <td>学生姓名</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>学生年龄</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>学生班级</td>
                <td><select name="score">
                        <option>1405phpa</option>
                        <option>php2102</option>
                    </select></td>
            </tr>
            <tr>
                <td>学生成绩</td>
                <td><input type="text" name="class"></td>
            </tr>
            <tr>
                <td><input type="submit" value="添加"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>
