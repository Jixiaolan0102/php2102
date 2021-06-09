<?php
    include  '../pdo.php';     //连接数据库
    $sql ="select * from lianxi";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
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
            <td>名字</td>
            <td>电话</td>
            <td>操作</td>
        </tr>
        <?php foreach ($stmt as $k=>$v){ ?>
        <tr>
            <td><?php echo $v['cid'];?></td>
            <td><?php echo $v['cname'];?></td>
            <td><?php echo $v['ctel'];?></td>
            <td>
                <a href="inseat3.php?cid=<?php echo $v['cid']?>">删除</a>||
                <a href="inseat4.php?cid=<?php echo $v['cid']?>">修改</a>
            </td>
        </tr>
      <?php } ?>

    </table>
</body>
</html>
