<?php
    include '../../quan.php';              //连接数据库
    $sql ="select * from from1";           //找到名为from1的表
    $stmt =mysqli_query($link,$sql);       //准备阶段
    $red = mysqli_fetch_all($stmt,1);      //执行阶段
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
    <table border="1">
    <tr>
    <td>id</td>
        <td>员工姓名</td>
        <td>密码</td>
        <td>确认密码</td>
        <td>年龄</td>
        <td>性别</td>
        <td>邮箱</td>
        <td>电话号码</td>
    </tr>
    <?php foreach($red as $k=>$v){ ?>
    <tr>
            <!-- 把数据库的数据添加到表格中 -->
             <td><?php echo $v['id']?></td>
            <td><?php echo $v['name']?></td>
            <td><?php echo $v['pass'] ?></td>
            <td><?php echo $v['password'] ?></td>
            <td><?php echo $v['year'] ?></td>
            <td><?php echo $v['sex'] ?></td>
            <td><?php echo $v['email'] ?></td>
            <td><?php echo $v['phond'] ?></td>
        
    </tr>
    <?php } ?>
    </table>
</body>
</html>