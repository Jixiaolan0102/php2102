<?php
include '../quan.php';
if($_POST){
        $uid =$_POST['id'];
        $uname =$_POST['name'];
        $ushop =$_POST['shop'];
        $unumber =$_POST['numbers'];
        $sql ="update p_goods set goods_name='{$uname}',shop_price={$ushop},goods_number={$unumber} where goods_id={$uid}";
        // echo '<pre>';print_r($sql); echo'</pre>';
        $query=mysqli_query($link,$sql);
        if($query){
            echo "修改成功";
            header("refresh:2;url=goods_list.php");die;
        }else{
            echo "修改失败";
        }
    }

    $get = $_GET['id'];
    $sql = "select * from p_goods where goods_id=$get";
    // echo $sql;
    $stmt = mysqli_query($link,$sql);
    $red =mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    // echo "<pre>";print_r($red); echo"</pre>";
    
    
   
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
    <form action="edti.php" method="post">
        商品ID:<input type="text" name="id" value="<?php echo $red[0]['goods_id']?>"><br>
        商品名:<input type="text" name="name" value="<?php echo $red[0]['goods_name']?>"><br>
        商品价格:<input type="text" name="shop" value="<?php echo $red[0]['shop_price']?>"><br>
        商品库存:<input type="text" name="numbers" value="<?php echo $red[0]['goods_number']?>"><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>