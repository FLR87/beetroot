<?php

//Инициализируйте массив с целочисленными значениями.
//Реализуйте функцию записи положительных и отрицательных значений в разные файлы использую оператор *switch*
//Basic array;
$array = [1,-2,5,-10,20,-50,100,-125,150,-100500];
//Function initialization:
numbrDispenser($array);

//Function setup:
function numbrDispenser($array){
    file_put_contents('negative.txt','');
    file_put_contents('positive.txt','');

    foreach ($array as $val){
        switch ($val > 0){
            case true:
                file_put_contents('positive.txt', $val . '>0 </br>', FILE_APPEND | LOCK_EX);
                echo $val . '>0 </br>';
                break;
            case false:
                file_put_contents('negative.txt',$val . '<0 </br>', FILE_APPEND| LOCK_EX);
                echo $val . '<0 </br>';
                break;
        }
    }
    return true;
}

?>