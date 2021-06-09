<?php
    // session_start();
    include '../quan.php';                //连接数据库
    $red ="select * from question_bank";        //找到名为 question_bank 的表
    $stmt = mysqli_query($link,$red);            //准备sql阶段
    $qrt = mysqli_fetch_all($stmt,MYSQLI_ASSOC);    //执行sql阶段
    // var_dump($qrt);die;
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
            <td>题库id</td>
            <td>题库名称</td>
            <td>题库添加人</td>
            <td>题库添加时间</td>
            <td>操作</td>
        </tr>
        <?php foreach($qrt as $k=>$v) { ?>
            
        <tr>
            <td><?php echo $v['q_id']?></td>
            <td><?php echo $v['q_name']?></td>
            <td><?php echo $v['q_man']?></td>
            <td><?php echo date('Y-m-d H:i:s',$v['q_time'])?></td>
            <td>
                <a href="shan.php?q_id=<?php echo $v['q_id'] ?>">删除</a>||
                <a href="xiu.php?q_id=<?php echo $v['q_id']?>">修改</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>