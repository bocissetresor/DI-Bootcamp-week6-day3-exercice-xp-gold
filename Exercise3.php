<?php

    function tempConversionC($celsius)  {
        return ($celsius * 9/5) + 32;
    }

    function tempConversionK($celsius)  {
        return ($celsius + 273.15);
    }

    echo tempConversionC(0). "<br>";
    echo tempConversionK(0);

?>