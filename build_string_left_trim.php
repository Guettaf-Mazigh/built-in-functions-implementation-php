<?php
include("build_strlen.php");//This function use build_strlen.php
function build_string_left_trim(string $str , mixed $value = " "): string{
        $result = "";
        $stop = false;
        for ($i=0; $i < build_strlen($str); $i++) :
            if($str[$i] === $value && $stop === false) 
                continue; 
            else
                $stop = true;
            $result .= $str[$i];
        endfor;
        return $result;
    }
    //exemple of usage :
    echo build_string_left_trim("       Test") . "<br>";//Test
    echo build_string_left_trim("@@@@Te@@@@@st","@");//Te@@@@@st
    echo "<br>";