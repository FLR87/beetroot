<?php
$arrayCount = [1,2,3,4,5];
$userFunc = function ($result) {
    // $result исходные данные которые мы передали при вызове call_user_func
    //Увеличения исходных данных на 1 и запись с новым клюючем
    foreach ($result['current'] as $val) {
        $result['new'][] = $val + 1;
    }
    return $result;
};
// Вызывает нашу основую функцию. И передаем в нее два параметра:
// Исходный массив с данными и пользовательскую функцию для их обработки.
$response = myFunction($arrayCount, $userFunc);
echo "<pre>";
var_dump($response);
echo "</pre>";
/**
 *
 * @param $arrayCount Исходный массив
 * @param $callback Функция для дополнтительной обработки исходного массива
 * @return mixed
 */
function myFunction($arrayCount, $callback) {
    // Записывает исходный массив в переменную $result['current']
    $result['current'] = $arrayCount;
    //Проверяем является ли переданный параметр функцией.
    if (is_callable($callback)) {
        //Вызываем переданную пользовательскую функцию и возвращаем обработанные данные
        $result = call_user_func($callback, $result);
    }
    //Возвращаем финальный результат.
    return $result;
}
?>