<?php


// function firstUniqChar($s)
// {
//     $res = PHP_INT_MAX;

//     foreach (range("a", "z") as $char) {

//         if (stripos($s, $char) != false && stripos($s, $char) == strripos($s, $char)) {
//             $res = min($res, stripos($s, $char));
//         }
//     }

//     return $res == PHP_INT_MAX ? -1 : $res;
// }

// echo firstUniqChar("aawssqeettcodcode");





// another solution

function firstUniqChar($s)
{
    for ($i = 0; $i <= strlen($s); $i++) {
        $substr = substr($s, $i, 1);
        if (substr_count($s, $substr) == 1) {
            // return substr($s, $i, 1);
            return $i;
        }
    }
}

echo firstUniqChar("aaxzwsqttcodcode");
