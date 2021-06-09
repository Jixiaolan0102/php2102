<?php
    // $slc=[
    //     "ab"=>'123',
    //     "ac"=>'123',
    //     "av"=>'123',
    //     "ab"=>'123',
    //     "an"=>'123',
    //     nn=>126,
    // ];
    // var_dump($slc);
    // echo"\n";
    // print_r($slc);
    // echo"\n";


    $awm=[12,13,14,15,16,'aa','bb','cc'];
    // $length=count($awm);
    // for($i=0;$i<$length;$i++){
    //     echo($awm[$i]);
    // }
    foreach($awm as $k=>$v){
        if($k==3){
            continue;   //跳过那个
        }
        if($k==5){
            die;   //bvfidfgidadfaviugtrgre
        }
        echo '$k='.$k.'>>>'.$v."\n";
    }