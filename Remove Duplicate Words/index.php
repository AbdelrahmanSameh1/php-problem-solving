<?php



function remove_repeated_words($text)
{

    // we can use built in function array_unique()


    $words = explode(" ", $text);
    $wordsLen = count($words);

    for ($i = 0; $i < $wordsLen - 1; $i++) {
        if ($words[$i] == $words[$i + 1]) {
            unset($words[$i + 1]);
        }
    }

    // convert the array to string
    $finalString = implode(" ", $words);

    return $finalString;
}


echo "<pre>";
echo remove_repeated_words("hello hello world world test");



// one line solution:
// return implode(" " , array_unique(explode(" ", $text)))
