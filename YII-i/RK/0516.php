<?php
    echo calfn(1,100,1);
    function calfn($str,$end,$number){
        $long_str = "";
        for ($i=$str;$i<=$end;$i++){
            $long_str .=$i;
        }
        return substr_count($long_str,$number);
    }
