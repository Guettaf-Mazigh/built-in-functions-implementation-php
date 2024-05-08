<?php
include("build_strlen.php");//This function use build_strlen.php
// Similar to a predefined function.
    function String_to_array(string $str , int $length = 1) : array{
        $arrayofChar = [];
        $lengthOfstring = build_strlen($str) ;
        if($length === 1):
            for ($i = 0 ; $i < $lengthOfstring ; $i++) $arrayofChar[] = $str[$i];// I used my function build_strlen
        else: 
           for($i = 0 ; $i < $lengthOfstring ; $i += $length){
                $char = "";
                for($j = 0 ; $j < $length && $j + $i < $lengthOfstring ; $j++){
                    $char .= $str[$i + $j];
                }
                $arrayofChar[] = $char;
           }
        endif;
        
        return $arrayofChar;
    }

    //exemple of usage : 
    print_r(String_to_array("TestingTheNewFunction",3)); //[0] => t [1] => e [2] => s [3] => t
    