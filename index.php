<?php

//$int = 1;
//$string = '23';

$array = [1, 3, 5, 6, 7, 8, 9, 'users' => ['Vadim', 'Alex', 'Sanya']];

//$arrayNames = ['Petrov','Ivanov','Sidorov'];
//for ($i = 0; $i < 15; $i++) {
//    echo "<pre>";
//    var_dump($array[$i]);
//    echo "</pre>";

//}

foreach ($array as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key => $value) {
            var_dump($value);
        }
    }

}
//while ($i < 5) {
//    $count = $i++;
//    echo '<pre>';
//    var_dump($i);
//    echo '</pre>';
//}
//$array = [1, 3, 5, 6, 7, 8, 9, 'fags'=> 10, 'users' => ['Vadim', 'Alex', 'Sanya']];
//foreach ($array as $key => $value) {
//    echo '<pre>';
//    var_dump($value);
//    echo '</pre>';
//
//}



?>