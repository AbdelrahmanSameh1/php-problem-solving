<?php

function romanToInt($s)
{

    $arr = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    $strArr = str_split($s);
    $strArrLen = count($strArr);

    // echo $arr[$strArr[0]];
    // die;


    $res = $arr[$strArr[$strArrLen - 1]];
    // $res = 0;

    for ($i = 0; $i < $strArrLen - 1; $i++) {
        if ($arr[$strArr[$i]] < $arr[$strArr[$i + 1]]) {
            $res = $res - $arr[$strArr[$i]];
        } else {
            $res = $res + $arr[$strArr[$i]];
        }
    }

    return $res;
}



echo romanToInt("MMMCMXCIX");
