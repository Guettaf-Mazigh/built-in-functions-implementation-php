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
    echo String_to_array("test");
    
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
    echo build_string_left_trim("       Hakim") . "<br>";
    echo build_string_left_trim("@@@@Ha@@@@@kim","@");

    