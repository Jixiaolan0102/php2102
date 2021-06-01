<?php
    session_start();


    if($_SESSION['name']){
        $username = $_SESSION['name'];
        echo "你好 {$username}[{$_COOKIE['biaoid']}], 滚回来！";
    }else{
        echo "请先登录";
    }
?>