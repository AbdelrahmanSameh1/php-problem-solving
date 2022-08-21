<?php



function twoSum($nums, $target)
{

    $flag = true;
    for ($i = 0, $j = $i + 1; $flag; $j++) {

        if ($nums[$i] + $nums[$j] == $target) {
            // $flag = false;
            return [$i, $j];
        }

        if ($j == count($nums) - 1) {
            $i++;
            $j = $i;
        }

        if ($i == count($nums) - 1) {
            return "Invalid target";
        }
    }
}



echo "<pre>";
print_r(twoSum([2, 3, 5, 4, 0], 5));
