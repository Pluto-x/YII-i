<?php
    echo hs();
    function hs(){
        $a = array('[1,2,3,4,5,6]');
        $ji = $ou = [];
        foreach ($a as $k=>$v){
            if($v%2 == 0){
                $ji[] = $v;
            }else{
                $ou[] = $v;
            }
        }
        print_r(array_merge($ji,$ou));
    }