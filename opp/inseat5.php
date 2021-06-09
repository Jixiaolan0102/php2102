<?php
    include  '../pdo.php';
    $cid =$_POST['cid'];
//    echo $cid;die;
    $name =$_POST['name'];
    $ctel =$_POST['ctel'];
    $pass =$_POST['pass'];
    $sql ="update lianxi set cname=?,ctel=?,pass=? where cid='$cid'";
//    var_dump($sql);die;
    $stmt =$dbh->prepare($sql);
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$ctel);
    $stmt->bindParam(3,$pass);
//    $stmt->bindParam(4,$cid);
    $stmt->execute();
//    $red =$stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->execute()){
        echo "修改成功";
        header('refresh:2;url=inseat2.php');
        die;
    }else{
        echo "修改失败";
    }


