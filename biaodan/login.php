<?php
      session_start();
      
    echo '<pre>';print_r($_POST);echo'</pre>';
    $value = trim($_POST['u']);
    $upass = trim($_POST['pass']);
    // 使用mysqli链接mysql
    $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库
    //连接到数据库
    $link=new mysqli($host,$user,$pass,$db);
    //sql语句
    $sql="select * from biao where name='{$value}'or email='{$value}'or mobile='{$value}'";
    // echo $sql;echo"<br>";
    //查询
    $result = mysqli_query($link,$sql);
    // echo $result;
    //获取结果
    $rows =mysqli_fetch_all($result,MYSQLI_ASSOC);
    if(empty($rows)){
        die("查无此人");
    }
    //验证密码
    if($upass==$rows[0]['pass']){
        echo "登录成功";
    
    $now = time();
    $sql = "update biao set last_login_time = ($now) where biaoid = {$rows[0]['biaoid']}";
    $_SESSION['name'] = $rows[0]['name'];
    setcookie('biaoid',$rows[0]['biaoid']);
    }else{
        echo '登陆失败';
    }



    // if(password_verify($upass,$rows[0]['pass'])){
    //     echo "登录成功";
    // }else{
    //     echo "密码不正确";
    // }
