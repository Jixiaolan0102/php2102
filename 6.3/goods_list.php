<?php

    $ye=1;                 //定义原页面
    if($_GET){
        $page = $_GET['page'];
            if($page<1){      //判断如果页面页数小于1时
                echo '这是第一页，前面没有了';
                $page=1;      //第一个页面，再点击上一页，还时最原来的页面
            }
        $ye = $page;        
    }
    $a = $ye * 10;        //原页数*10，相当于切换到上下页面，输出的行数


           $host="127.0.0.1";   //mysql 的主机地址
           $user="root"; //数据库用户名
           $pass="root";  //数据库密码
           $db="php2102";  //使用数据库
           //连接数据库
           $link = new mysqli($host,$user,$pass,$db);

           $sql = "select * from p_goods limit $a,10";       
           $stmt = mysqli_query($link,$sql);      //查询
           $mmm = mysqli_fetch_all($stmt,MYSQLI_ASSOC);      //执行
           $count = count($mmm);       //总页数
           echo "<pre>"; print_r($count); echo "</pre>";
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
    <?php
        foreach($mmm as $k=>$v){?>
            <li>
                <a href="goods.php ?id=<?php echo $v['goods_id']?>">
                <?php echo $v['goods_name']?></a>
            </li>
      <?php }
    ?>
    <?php
        $add_ye =$ye+1;      //原页面+1，切换到下个页面
        $roo =$ye-1;         //原页面-1，切换到上个页面
    ?>
    <a href="goods_list.php?page=<?php echo $roo?>">上一页</a>
    <a href="goods_list.php?page=<?php echo $add_ye?>">下一页</a>
</body>
</html>