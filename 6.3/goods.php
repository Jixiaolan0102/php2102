<?php
     if(isset($_GET['id']) ==false){
        echo "找不到此页面";
        header('refresh:2;url=goods_list.php');
        die;
     }
    
    $aa = intval($_GET['id']);
    $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库
    //连接数据库
    $link = new mysqli($host,$user,$pass,$db);
    $sql = "select * from p_goods where goods_id ='{$aa}'";
    $stmt = mysqli_query($link,$sql);
    $red = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    // echo"<pre>";print_r($red); echo "</pre>";
    echo "商品id".$red[0]['goods_id'];echo "<br>";
    echo "商品名".$red[0]['goods_name'];echo "<br>";
    echo "浏览量".$red[0]['click_count'];echo "<br>";
    echo "商品价格".$red[0]['shop_price'];echo "<br>";
    echo "商品价格".$red[0]['goods_number'];echo "<br>";
    // echo "上架时间".$red[0][10];echo "<br>";
    $shang = $red[0]['add_time'];
     echo "上架时间" .date("Y-m-d H:i:s",$shang);
    ?>
    <?php
    $liu = $red[0]['click_count']+1;
    // echo '<pre>';print_r($liu); echo'</pre>';
    $sql = "update p_goods set click_count='$liu' where goods_id=$aa";
    $stmt = mysqli_query($link,$sql);
    // $logi = mysqli_fetch_all($stmt);
    ?>
