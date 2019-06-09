<?php
    echo number('Have you ever gone shopping and');
    function number($a){
        $b = strlen($a);
        $c = '';
        for($i=0;$i<=$b;$i++){
            $c = $a[$i];
            echo $c;
        }
    }