<?php
include("build_strlen.php");//This function use build_strlen.php
function build_strrev(string $str){
        $string = "";
        $length = build_strlen($str);
        for ($i = ($length - 1); $i >= 0; $i--) $string .= $str[$i];
        return $string;
    }

    //exemple of usage :
    echo build_strrev("Testing");//gnitseT
    echo "<br>";