<?php
    // 使用mysqli链接mysql
    $host="127.0.0.1";   //mysql 的主机地址
    $user="root"; //数据库用户名
    $pass="root";  //数据库密码
    $db="php2102";  //使用数据库
    $link=new mysqli($host,$user,$pass,$db);
    // 向数据库中写入数据
    $sql="insert into goods(`goodsname`,`goodsprice`,`time`,`page`,`deletr`) 
    values('aoliao','12.5','2102.5.29','100','no')";
    //准备阶段
    $stmt=mysqli_prepare($link,$sql);
    var_dump($stmt);
    echo "<hr>";
    echo'<pre>';print_r($stmt);echo'</pre>';
    //执行阶段
    echo "<hr>";
    mysqli_stmt_execute($stmt);
    echo'<pre>';print_r($stmt);echo'</pre>';
