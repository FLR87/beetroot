<?php

//HomeWork

//'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard'

//1. Удаление заданной подстроки "and" из текста.
//2. Количество вхождений подстроки "and" в тексте.
//3. Определить длины кратчайшего и самого длинного слова в строке.
//4. Если текущее слово в строке содержит букву "а" сделать его upperr.

//1
$str = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard\'';
echo str_replace(' and ', '', $str) . '</br>';

//2
echo ' The word "AND" occurs ';
echo substr_count($str, 'and').' times </br>';

//3
$str = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard\'';
$words = explode(' ', $str);

$longestWordLength = 0;
$longestWord = '';
$shortestWordLength = 100;
$shortestWord = '';

foreach ($words as $word) {
    if (strlen($word) > $longestWordLength) {
        $longestWordLength = strlen($word);
        $longestWord = $word;
    }
}
foreach ($words as $word) {
    if (strlen($word) < $shortestWordLength){
        $shortestWordLength = strlen($word);
        $shortestWord = $word;
    }
}
echo 'Longest word is ';
echo $longestWord .'</br>';
echo 'Shortest word is ';
echo $shortestWord .'</br>';;

//4
//coming soon...
?>