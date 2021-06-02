<?php
     session_start();
     unset($_SESSION['name']);
     echo "退出成功";
     header('Refresh:2;url=login.html');
    