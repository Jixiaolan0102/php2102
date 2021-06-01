<?php
      session_start();
      
    echo '<pre>';print_r($_POST);echo'</pre>';
    $value = trim($_POST['u']);
    $upass = trim($_POST['pass']);
    // 使用mysqli链接mysql
    include 'quan.php';
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

    //记录登录信息
    $uid = $rows[0]['biaoid'];   //用户id
    $login_time = $now;    //登录时间
    $login_ip = $_SERVER['REMOTE_ADDR'];   //用户登录IP
    $ua = $_SERVER['HTTP_USER_AGENT'];    //浏览器信息
    $sql = "insert into login_history (`uid`,`login_time`,`login_ip`,`ua`) 
    values('{$uid}','{$login_time}','{$login_ip}','{$ua}')";
    //执行
    $stmt = mysqli_prepare($link,$sql);
    $array = mysqli_stmt_execute($stmt);
    echo '<br>';
    if($array){
        echo "成功";
    }else{
        echo "失败";
    }
    echo "<br>";
    //跳转
        echo"登录成功 正在跳转个人中心";
        header('Refresh:2;url=my.php');
    }else{
        echo '登陆失败';
    }



    // if(password_verify($upass,$rows[0]['pass'])){
    //     echo "登录成功";
    // }else{
    //     echo "密码不正确";
    // }
