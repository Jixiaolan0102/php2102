<?php
    if($_POST){
    include '../quan.php';          //连接数据库
    $name =$_POST['name'];          //表单的值
    $man = $_POST['man'];    
    $time = time();                 //设置时间戳
    if($name==""){                  //判断名字不等为空
        echo "题库名称不能为空";
        header('refresh:2;url=yk.php');die;
    }
    if($man==""){                  //判断推荐人不等为空
        echo "推荐人不能为空";
        header('refresh:2;url=yk.php');die;
    }
    $sql ="insert into question_bank (`q_name`,`q_man`,`q_time`)values('{$name}','{$man}','{$time}')";       //将表单数据添加到数据库中
    // echo '<pre>';print_r($sql); echo'</pre>';
    $stmt =mysqli_prepare($link,$sql);          //准备sql语句
    $red = mysqli_stmt_execute($stmt);          // 执行sql语句
    if($red){                                   //判断sql语句是否执行成功
        echo "提交成功";
        header('refresh:2; url=yk2.php');
    }else{
        echo "提交失败";
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
    <form action="yk.php" method="post">
        题库名称<input type="text" name="name"><br>
        题库添加人<input type="text" name="man"><br>
        <input type="submit" value="添加">
    </form>
</body>
</html>