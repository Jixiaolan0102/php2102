<?php
        $host="127.0.0.1";   //mysql 的主机地址
       $user="root"; //数据库用户名
       $pass="root";  //数据库密码
       $db="php2102";  //使用数据库
       //连接数据库
       $link = new mysqli($host,$user,$pass,$db);