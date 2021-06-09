<?php
    // if($_POST){
    //     $name =$_POST['q_name'];
    //     $man = $_POST['q_man'];
    //     $time =time();
    //     var_dump($name);
    //     die;
    //     $sql ="update question_bank set q_name={$name},q_man={$man},q_time={$time} where q_id=$qw";
    //     $stmt = mysqli_query($link,$sql);
    //     if($stmt){
    //         echo "修改成功";
    //         header('refresh:2;url=yk2.php');
    //         die;
    //     }else{
    //         echo "修改失败";
    //     }
    // }
    $qw = $_GET['q_id'];
//    var_dump($qw);
     include '../quan.php';
    $sql = "select * from question_bank where q_id=$qw";
//    var_dump($sql);
    
    $stmt = mysqli_query($link,$sql);
    $red = mysqli_fetch_all($stmt,MYSQLI_ASSOC);

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
<form action="xiu2.php" method="post">
        <input type="hidden" name="q_id" value="<?php echo $red[0]['q_id']?>">
        题库名称<input type="text" name="name" value="<?php echo $red[0]['q_name']?>"><br>
        题库添加人<input type="text" name="man" value="<?php echo $red[0]['q_man']?>"><br>
        <input type="submit" value="修改">
    </form>
</body>
</html>