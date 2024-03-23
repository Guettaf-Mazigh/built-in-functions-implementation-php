<?php
include("build_strlen.php");//This function use build_strlen.php
//This function is similte to substr_replace
    function build_substr_replace(string $str , mixed $to_replace , int $index = 0 , int $length_offset = null) : string{
        $length = build_strlen($str);//I use my function build_strlen
        if($length_offset == null) $length_offset = $length; 

        if($index > $length_offset)//if the index value exceeds the maximum allowed length the we add $to_replace in the length_offset
            return $str . $to_replace;

        $string = ""; $j = 0 ; $a = 0;

        if($index >= 0):
            for ($i = 0 ; $i < $length; $i++) :
                if($i != $index)
                    $string .= $str[$i];
                else{
                    $string .= $to_replace;
                    break;
                }
            endfor;
            for($j = $i ; $j < $length ; $j++):
                if($a < $length_offset):
                    $a++;
                    continue;
                endif;
                $string .= $str[$j];
            endfor;
        else:
            $index = abs($index);
            $str[$length - $index] = $to_replace;
            $i = 0;
            while($i <= ($length - $index)) :
                $string .= $str[$i];
                $i++;
            endwhile;
        endif;

        return $string;
    }

    //exemple of usage : 
    echo build_substr_replace("TestingTesting","@",2,6);//Te@esting
    echo "<br>";
    echo substr_replace("TestingTesting","@",2,6);//Te@esting