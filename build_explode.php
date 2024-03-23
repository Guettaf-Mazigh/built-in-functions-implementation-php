<?php
include("build_strlen.php");//This function use build_strlen.php
function build_explode(string $separator, string $str) : array{
        $length = build_strlen($str);
        $i = 0;
        $string = "";
        $array = [];
        while($i < $length) {
            if ($str[$i] !== $separator) 
                $string .= $str[$i];  
            else{
                $array[] = $string;
                $string = "";
            }
            $i++;
        }
        $array[] = $string; //the last word
        return $array;
    }
    //exemple of usage : 
    print_r(build_explode("/","Hello/world!")); //[0] => Hello [1] => world! 
    echo "<br>";