<?php


function add_commas_and_underscore($num)
{

    $newString = "";


    $numLength = strlen((string) $num);
    $numToString = str_split($num);
    $numToStringLength = count($numToString);



    if ($numToStringLength > 3) {

        array_splice($numToString, -3, 0, "_");


        $i = 0;
        $j = 1;
        while ($numToStringLength > 6 + $i) {
            array_splice($numToString, -6 - $i - $j, 0, ",");
            $i = $i + 3;
            $j++;
        }
    }




    return implode(" ", $numToString);
}


echo add_commas_and_underscore(1234567891011);

// print_r(add_commas_and_underscore(1234567891011));
