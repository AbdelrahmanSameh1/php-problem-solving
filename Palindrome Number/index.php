<?php


function isPalindrome($n)
{

    $arr = str_split($n);
    $arrLen = count($arr);

    for ($i = 0, $j = $arrLen - 1; $i < $j; $i++, $j--) {

        if ($arr[$i] != $arr[$j]) {
            return "false";
        }
    }

    return "true";
}



echo isPalindrome(-121);
