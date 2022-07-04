<?php


function remove_char_from($word, $char)
{
    $finalWord = "";

    $charList = str_split($word);


    foreach ($charList as $c) {
        if ($c !== strtolower($char) && $c !== strtoupper($char)) {
            $finalWord .= $c;
        }
    }



    return $finalWord;



    // one line solution
    // return str_replace(array(strtolower($char), strtoupper($char)), "", $word);




}

echo remove_char_from("hellodD theredd", "D");
