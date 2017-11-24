<?php
$array = [1, -1, 'key', 25, -25, 'waffle', 50, -50, '(^_^)'];

print_r('Unprocessed array </br>');
print_r($array);

$positiveFunction = function ($var) {
    foreach ($var as $value) {
        // is value positive;
        if ($value >= 0) {
            $result[] = $value;
        }
    }
    return $result;
};
$negativeFunction = function ($var) {
    foreach ($var as $value ){
        // is value negative;
        if ($value < 0) {
            $result[] = $value;
        }
    }
    return $result;
};
function stringFilter($array1, $callback = null)
{
    // String values has been filtered away:
    for ($i = 0; $i < count($array1); $i++) {
        If (is_numeric($array1 [$i])) {
            $result[] = $array1 [$i];
        }
    }
    //If callable execute functions:
    if (is_callable($callback)) {
        //Calling user's function:
        $result = call_user_func($callback, $result);
    }
    return $result;
}

echo('<br><br> Массив состоящий только из чисел (фильтр исходного)<br>');
print_r(stringFilter($array));
echo('<br><br> Числа массива, которые БОЛЬШЕ нуля <br>');
print_r(stringFilter($array, $positiveFunction));
echo('<br><br> Числа массива, которые МЕНЬШЕ нуля <br>');
print_r(stringFilter($array, $negativeFunction));
?>