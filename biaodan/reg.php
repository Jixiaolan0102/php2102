<?php
    echo '<pre>';print_r($_POST);'</pre>';
    //使用mysqli链接mysql
    $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库
     // 链接数据库
     $link=new mysqli($host,$user,$pass,$db);
     //处理变量
     $rname=trim($_POST['regname']);
     $email=trim($_POST['email']);
     $mobile=trim($_POST['mobile']);
     $year=trim($_POST['year']);
     $pass=trim($_POST['pass']);
     $password=trim($_POST['password']);
     
    //  查询用户名是否存在于数据库
    $sql="select * from reg where regname='$_POST[regname]'";
    $rs=mysqli_query($sql);
    if(mysqli_num_rows($rs)>0){
        echo "用户名已存在";
    }else{
        echo "注册成功";
    }
    echo'<pre>';print_r($rs);echo'</pre>';