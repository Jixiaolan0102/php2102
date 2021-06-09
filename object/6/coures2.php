<?php
include '../../quan.php';
$sql ="select * from course";
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
            <td>课程名称</td>
            <td>课程价格</td>
            <td>是否连载</td>
            <td>课程讲师</td>
            <td>操作</td>
        </tr>
        <?php foreach ($red as $k=>$v){ ?>
            <tr>
                <td><?php echo $v['id']?></td>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['price']?></td>
                <td><?php echo $v['ser']?></td>
                <td><?php echo $v['teacher']?></td>
                <td>
                    <a href="course3.php?id=<?php echo $v['id']?>">删除</a>
                    <a href="coures4.php?id=<?php echo $v['id']?>"">修改</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
