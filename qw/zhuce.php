<?php
    echo'<pre>';print_r($_POST);echo'</pre>';
        // 使用mysqli链接mysql
        $host="127.0.0.1";   //mysql 的主机地址
        $user="root"; //数据库用户名
        $pass="root";  //数据库密码
        $db="php2102";  //使用数据库
        // 链接数据库
        $link=new mysqli($host,$user,$pass,$db);
        // 处理变量
        $username= trim($_POST['uname']);
        $mobile=trim($_POST['mobile']);
        $email=trim($_POST['email']);
        $sql="insert into users(`username`,`email`,`mobile`) 
        values('{$username}','{$email}','{$mobile}')";
        //准备阶段
        $stmt=mysqli_prepare($link,$sql);
        //执行阶段
        $result=mysqli_stmt_execute($stmt);
        if($result){
            echo "insert 成功";
        }else{
            echo "insert 失败";
        }