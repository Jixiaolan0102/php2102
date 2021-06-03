<?php
    $aa = intval($_GET['id']);
    $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库
    //连接数据库
    $link = new mysqli($host,$user,$pass,$db);
    $sql = "select * from p_goods where goods_id ='{$aa}'";
    $stmt = mysqli_query($link,$sql);
    $red = mysqli_fetch_all($stmt);
    // echo"<pre>";print_r($red); echo "</pre>";
    echo "商品id".$red[0][0];echo "<br>";
    echo "商品名".$red[0][3];echo "<br>";
    echo "浏览量".$red[0][4];echo "<br>";
    echo "商品价格".$red[0][6];echo "<br>";
    // echo "上架时间".$red[0][10];echo "<br>";
    $shang = $red[0][10];
     echo "上架时间" .date("Y-m-d H:i:s",$shang);
    ?>
    <?php
    $liu = $red[0][4]+1;
    // echo '<pre>';print_r($liu); echo'</pre>';
    $sql = "update p_goods set click_count='$liu' where goods_id=$aa";
    $stmt = mysqli_query($link,$sql);
    // $logi = mysqli_fetch_all($stmt);
    ?>
