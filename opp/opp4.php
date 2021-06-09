<?php
    class Person{
        public $age =0;
        public $sex ="未知";
        public $weight =0;
        public $color ="无色";
        

        public function eat(){
            echo "吃奶";
        }
        public function cry(){
            echo "哭";
        }
    }


    //定义一个类  继承另一个类

    class white extends Person{
        public $color ="white";
        public function cry(){
            echo "wa wa wa";
        }
    }
    //创建对象
    $q1 =new white ();
    echo $q1->age;echo "<hr>";
    $q1->cry();echo "<hr>";
    echo "肤色" .$q1->color;