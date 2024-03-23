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