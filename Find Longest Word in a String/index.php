<?php


function longest_word_in($text)
{
    $textArr = explode(" ", $text);
    $textArrLen = count($textArr);
    // $longestWord = $textArr[0];
    $longestWord = "";



    foreach ($textArr as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }


    // for ($i = 0; $i < $textArrLen - 1; $i++) {
    //     if (strlen($longestWord) < strlen($textArr[$i + 1])) {
    //         $longestWord = $textArr[$i + 1];
    //     }
    // }

    return $longestWord;
}



print_r(longest_word_in("I plaaaaaay play footbaaaaaaaaall"));
