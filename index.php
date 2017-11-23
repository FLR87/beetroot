<?php

//Реализуйте функцию вывода положительных значений массива кратных «5»
//Basic array:
$array=[0,-10,-13, 20,-40, 30, 40, 50, 60, 70, 80, 100];
//Multyplicity:
$mlt=5;

//calling mlTfunction:
mlTfunction($array,$mlt);

//Setting up mlTfunction:
function mlTfunction ($array, $mlt){
    foreach ($array as $val){
        if(($val >= 0) && ($val % $mlt == 0)){
            echo "<pre>";
            echo "$val";
            echo "</pre>";
        }
    }
}

?>