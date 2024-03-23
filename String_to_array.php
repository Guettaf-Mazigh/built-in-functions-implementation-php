<?php
include("build_strlen.php");//This function use build_strlen.php
// Similar to a predefined function.
    function String_to_array(string $str) : array{
        $arrayofChar = [];
        for ($i = 0 ; $i < build_strlen($str) ; $i++) $arrayofChar[] = $str[$i];// I used my function build_strlen
        return $arrayofChar;
    }

    //exemple of usage : 
    print_r( String_to_array("test")); //[0] => t [1] => e [2] => s [3] => t
    