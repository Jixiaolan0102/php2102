<?php
    include '../../quan.php';
    $sql ="select * from studebt";
    $stmt =mysqli_query($link,$sql);
    $red =mysqli_fetch_all($stmt,1);
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
    <table border="1">
        <tr>
            <td>id</td>
            <td>学生姓名</td>
            <td>学生年龄</td>
            <td>学生班级</td>
            <td>学生成绩</td>
            <td>操作</td>
        </tr>
        <?php foreach ($red as $k=>$v){ ?>
            <tr>
                <td><?php echo $v['stu_id']?></td>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['age']?></td>
                <td><?php echo $v['score']?></td>
                <td><?php echo $v['class']?></td>
                <td>
                    <a href="stu2.php?stu_id=<?php echo $v['stu_id']?>">删除</a>
                    <a href="stu3.php?stu_id=<?php echo $v['stu_id']?>">修改</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
