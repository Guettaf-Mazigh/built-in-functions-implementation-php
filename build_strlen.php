<?php
    function build_strlen(string $str) : int{
        $count = 0;
        while (!empty($str[$count])) $count++;
        return $count;
    }

    // exemple of usage : 
    echo "From build_strlen " . build_strlen("test") . "<br>";
