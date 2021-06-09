<?php

    $ye=0;                 //定义原页面
    if($_GET){
        $page = $_GET['page'];
            if($page<0){      //判断如果页面页数小于1时
                echo '这是第一页，前面没有了';
                $page=0;      //第一个页面，再点击上一页，还时最原来的页面
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

           $sql = "select * from p_goods order by goods_id desc limit $a,10";       
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
                <?php echo $v['goods_name'] ?></a>
                <a href="edti.php?id=<?php echo $v['goods_id']?>">编辑商品信息</a>
            </li>
      <?php }
    ?>
    <?php
    if($page=0){      //判断如果页面页数小于1时
        header("refresh:2;url=goods_list.php");
    }
        $add_ye =$ye+1;      //原页面+1，切换到下个页面
        $roo =$ye-1;         //原页面-1，切换到上个页面

        // $aaa = 1000;
        // $ace = 1000/10;
        $sql = "select count(goods_id) from p_goods";
        $stmt = mysqli_query($link,$sql);
        $redf = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
        // $count = count($redf);
        // $awm = ceil($count/10);
        $count = ceil($redf[0]['count(goods_id)']/10);
    ?>
    <a href="goods_list.php?page=<?php echo $page ?>">首页</a>
    <a href="goods_list.php?page=<?php echo $roo?>">上一页</a>
    <a href="goods_list.php?page=<?php echo $add_ye?>">下一页</a>
    <a href="goods_list.php?page=<?php echo $count-1?>">尾页</a>
    <a href="add.html">添加</a>
    <a href="search.html">搜索</a>
    <br>
</body>
</html>