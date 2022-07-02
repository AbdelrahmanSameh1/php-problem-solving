<?php


function convert($num)
{

    // convert the number to array of strings
    // $arrayOfStrings = str_split($num);


    // convert array elements to int
    // $array = array_map("intval", $arrayOfStrings);


    $num_to_string = (string) $num;
    $arr = [];
    $strlen = strlen($num_to_string);

    for ($i = 0; $i < $strlen; $i++) {
        $arr[$i] = (int) $num_to_string[$strlen - 1 - $i];
    }

    return $arr;
}

echo "<pre>";
var_dump(convert(123456));
