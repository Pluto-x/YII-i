<?php
    echo compute(1,100,1);
    function number($n){
        if ($n == 1){
            return  1;
        }elseif ($n == 2) {
            return 2;
        }elseif ($n>=3){
            return number($n-1)+number($n-2);
        }
        echo number();
     }
     function compute($str,$end,$number){
        $long_str = "";
        for ($i=$str;$i<=$end;$i++){
            $long_str .=$i;
        }
        return substr_count($long_str,$number);
     }