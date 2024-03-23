<?php
    // added some functionalities :
    // Initializes the number of repetitions to 2 (default)
    // If $space is set to true, a space is added between each repetition.
    function build_str_repeat(string $str ,int $numOfRepeat = 2 , bool $space = false){ 
        $result = "";
        $separator = $space ? " " : "";
        for($i = 0 ; $i < $numOfRepeat ; $i++):
            $result .= $str . $separator;
        endfor;
        return $result;
    }

    // exemple of usage:
    // my function : 
    echo build_str_repeat("test",5,"space") . "<br>";
    // str_repeat predefined function: 
    str_repeat("test",5) . "<br>";

    #####################################################################

    // Similar to a predefined function.
    function build_strlen(string $str) : int{
        $count = 0;
        while (!empty($str[$count])) $count++;
        return $count;
    }

    // exemple of usage : 
    echo build_strlen("test");

    ######################################################################
    
    // Similar to a predefined function.
    function String_to_array(string $str) : array{
        $arrayofChar = [];
        for ($i = 0 ; $i < build_strlen($str) ; $i++) $arrayofChar[] = $str[$i];// I used my function build_strlen
        return $arrayofChar;
    }

    //exemple of usage : 
    print_r( String_to_array("test")); //[0] => t [1] => e [2] => s [3] => t
    
    ######################################################################
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
    echo build_string_left_trim("       Test") . "<br>";//Test
    echo build_string_left_trim("@@@@Te@@@@@st","@");//Te@@@@@st
    echo "<br>";
    ######################################################################
    
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
    ######################################################################

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
    ######################################################################
    function build_strrev(string $str){
        $string = "";
        $length = build_strlen($str);
        for ($i = ($length - 1); $i >= 0; $i--) $string .= $str[$i];
        return $string;
    }

    //exemple of usage :
    echo build_strrev("Testing");//gnitseT
    echo "<br>";
    ######################################################################
    //This function is similte to substr_replace
    function build_substr_replace(string $str , mixed $to_replace , int $index = 0 , int $length_offset = null) : string{
        $length = build_strlen($str);
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
    