<?php

    function multiply_two_lists($val1, $val2) {

        $first = explode(' ', trim($val1));
        $second = explode(' ', trim($val2));

        foreach($first as $key => $value){
            $result[$key] = $first[$key] * $second[$key];
        }
        return implode(' ', $result);
    }

    echo multiply_two_lists(("20 12 5"), ("1 3 3"));

?>