<?php

/**
 * Created by PhpStorm and officialy stolen from Wiki
 * User: coolhaker
 * Date: 21.11.2017
 * Time: 16:18
 */
//Bubble Sort in a nutshell:
$array = [0, 9, 1, 20, 15, 3, 4, 5];
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        }
    }
}
print_r($array);

?>