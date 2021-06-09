<?php
if($_POST){

    include '../quan.php';
    $name =$_POST['name'];
    $shop =$_POST['shop'];
    $number =$_POST['number'];
    $sql = "insert into p_goods (`goods_name`,`shop_price`,`goods_number`,`goods_desc`) values('{$name}','{$shop}','{$number}','')";
    // echo $sql;die;
    // echo '<pre>';print_r($sql); echo'</pre>';
    // die;
    $stmt = mysqli_prepare($link,$sql);
    $red = mysqli_stmt_execute($stmt);
    if($red){
        echo "添加成功";
        header('Refresh:2;url=goods_list.php');die;
    }else{
        echo "添加失败";
    }
}     
