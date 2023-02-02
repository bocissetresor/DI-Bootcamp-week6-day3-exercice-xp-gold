<?php

    function sum_of_digits($digits) : void {
        $sum = 0;
        for ($i = 0; $i < strlen($digits); $i++){ 
            $sum += $digits[$i]; 
        }

        echo $sum;
    }

    sum_of_digits("123456789");
?>