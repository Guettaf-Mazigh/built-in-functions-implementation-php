<?php
include("build_strlen.php");//This function use build_strlen.php
function build_strtr(string $str , string $to_replace , string $replace) : string{
        $length = build_strlen($str);
        for($i = 0 ; $i < $length ; $i++):
            if($str[$i] === "$to_replace")
                $str[$i] = "$replace";
        endfor;
        return $str;
    }

    //exemple of usage : 
    echo build_strtr("Testing","e","@");//T@sting
    echo "<br>";