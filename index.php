<?php
$array = [1, -1, 'key', 25, -25, 'waffle', 50, -50, '(^_^)'];

echo 'Unprocessed array: </br>';
print_r($array);
echo '</br>';

function stringFilter($array1, $callback = null)
{
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

// Value positive check:
$positiveFunction = function ($num) {
    foreach ($num as $value) {
        if ($value >= 0) {
            $result[] = $value;
        }
    }
    return $result;
};
// Value negative check:
$negativeFunction = function ($num) {
    foreach ($num as $value) {
        if ($value < 0) {
            $result[] = $value;
        }
    }
    return $result;
};
//Results:
echo(' Strings only:</br>');
print_r(stringFilter($array));
echo '</br>';
echo(' Values bigger then zero: </br>');
print_r(stringFilter($array, $positiveFunction));
echo '</br>';
echo(' Values lower then zero: </br>');
print_r(stringFilter($array, $negativeFunction));
?>