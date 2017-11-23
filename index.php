<?php

//Реализуйте функцию подсчета количества элементов в массиве
$array = [0, '1', 2, '3', 4, '5', 6, '7', 8, '9',50,'text'];

    function counTer($array)
    {
        $n = 0;
        foreach ($array as $val) {
            $n++;
        }
        return $n;
    }
    echo counTer($array);

?>