<?php
//Самостоятельная:

//1) Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива.
$array = [1, 2, 3, 4, 5];
$sum = 0;
foreach ($array as $v) {
    $sum = $sum + pow($v, 2);
}
print_r($sum);

//2) Сформировать массив от 1 до 100 цикл while с числами от 0 до 100 или for()

$j = 0;
$arr = [];
while ($j <= 100) {
    $arr[$j] = mt_rand(1, 100);
    $j++;
}
echo '<pre>';
print_r($arr);
echo '</pre>';

//3) С помощью foreach() Определить для каждого значение десятичный логарифм. log10() и ограничить количество знаков
// после запятой number_format:
//$array2 = [];
//foreach ($array2 as $v) {
//    echo number_format(log10($v), 2);
//}
//4) Результат запишите в файл с уникальным названием:
echo '<pre>';
$rndName = uniqid('log_'). '.txt';
foreach ($arr as $v){
    file_put_contents($rndName,number_format(log10($v),2).",",FILE_APPEND|LOCK_EX);
}

?>