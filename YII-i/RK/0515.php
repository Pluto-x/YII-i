<?php
echo arr($array=[1,2,3,4,5,6]);
    function arr($array){

        $ji = $ou = [];
        foreach ($array as $k=>$v){
            if ($v%2 == 1){
                $ji[] = $v;
            }else{
                $ou[] = $v;
            }
        }
        print_r(array_merge($ji,$ou));
    }