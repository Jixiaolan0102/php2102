<?php
     session_start();
     unset($_SESSION['name']);
     echo "ιεΊζε";
     header('Refresh:2;url=login.php');
