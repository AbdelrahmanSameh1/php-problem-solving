<?php



function intToRoman($n)
{

    $romanArr = ["I", "IV", "V", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M"];

    $num = [1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000];



    $roman = "";

    for ($i = count($romanArr) - 1; $i >= 0; $i--) {

        while ($n >= $num[$i]) {
            $n = $n - $num[$i];
            $roman .= $romanArr[$i];
        }
    }



    return $roman;
}



echo intToRoman(3999);
