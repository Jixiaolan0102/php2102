<?php
//合并一个或多个数组
     $arr=['a','b','c','d','e'];
     $arr2=['f','g','h','r','j'];
     $arr3=array_merge($arr,$arr2);
     echo'<pre>';print_r($arr3);echo'</pre>';