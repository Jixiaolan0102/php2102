<?php
    function  nam($length=5){
        $awm='abcdefghrjklmnpqistvwxyzABCDEFGHRJKLMNPQISTVWXYZ23456789';
        $awn0='';
        for($i=0;$i<$length;$i++){
            $nam=mt_rand(0,56);
            $c=$awm[$nam];
            $awm0.=$c;
        }
        return  $awm0;
    }
    var_dump(nam());