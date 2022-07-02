<?php


function find_missing_letter_in($givenLetters)
{

    $alpha = '';

    foreach (range("a", "z") as $letter) {
        $alpha .= $letter;
    }

    $start = strpos($alpha, $givenLetters[0]);

    for ($i = 0; $i < strlen($givenLetters); $i++) {
        if ($alpha[$start + $i] != $givenLetters[$i]) {
            return $alpha[$start + $i];
        }
    }
    return "no missing letters in sequence";
}





// Testing Output

// echo find_missing_letter_in("abcdeghi") . "<br>"; // f
// echo find_missing_letter_in("defgi") . "<br>"; // h
echo find_missing_letter_in("xyz") . "<br>"; // no missing letters in sequence