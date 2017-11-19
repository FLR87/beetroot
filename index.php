<?php

//$int = 1;
//$string = '23';

//$array = [1, 3, 5, 6, 7, 8, 9, 'users' => ['Vadim', 'Alex', 'Sanya']];

//$arrayNames = ['Petrov','Ivanov','Sidorov'];
//for ($i = 0; $i < 15; $i++) {
//    echo "<pre>";
//    var_dump($array[$i]);
//    echo "</pre>";

//}

//foreach ($array as $key => $value) {
//    if (is_array($value)) {
//        foreach ($value as $key => $value) {
//            var_dump($value);
//        }
//    }
//
//}
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

//var_dump ($_SERVER);
//var_dump ($_GET['id]']);
//var_dump ($_POST['id]']);

//$b = 5;
//
//echo "Сложение:" . ($a + $b);
//echo "Вычитание:" . ($a - $b);

//$array = ['a'=>'Sergey','b'=>'Alexander','c'=>'Alexey','z'=>'Anna', 't'=>'Tanya'];
//ksort($array);
//krsort($array);
//asort($array);
//arsort($array);
//$chunks = array_chunk($array,2, true);
//$diff = array_diff($array1,$array2);

//$array1 = ['a','b','c','d','e','f','g','a','a','f',];
//$array2 = ['h','i','j','k','a','b','c','f'];
//$merge = array_unique(array_merge($array1,$array2));
//echo "<pre>";
//print_r($merge);
//echo "</pre>";

//$fruits = ['apple','bananna','orange','pear'];
//$pop = array_pop($fruits);
//echo "<pre>";
//echo $pop;
//echo "</pre>";
//echo "<pre>";
//var_dump ($fruits);
//echo "</pre>";

//$fruits = ['apple','bananna','orange','pear'];
//$shift = array_shift($fruits);
//echo "<pre>";
//print_r ($fruits);
//echo "</pre>";

//$fruits = ['apple','bananna','orange','pear'];
//shuffle($fruits);
//print_r($fruits);

//$fruits = ['apple','bananna','orange','pear'];
//$rand = array_rand($fruits);
//print_r($fruits[$rand]);

//$number = 9;
//
//if ($number > 10){
//    print "bigger then 10";
//}elseif($number >5){
//    print "betwin 5 and 10";
//}else{echo"lower then 5";}

//echo "<pre>";
//echo $number > 10 ? "yes" : "no";
//echo "</pre>";

//$name = "dude";
//    switch ($name){
//        case "Sergey":
//            echo "Hello,".$name;
//            break;
//        case "Alex":
//            echo "Hello,".$name;
//            break;
//        default:
//            echo "We don't know eachother";
//            break;
//    }
//
//$fruits = ['a '=>'apple','b '=>'bananna','o '=>'orange','p '=>'pear'];
//foreach ($fruits as $key=>$fruit){
//    print $key. 'stands for '.$fruit."</br>";
//}

//$fruits = ['apple','bananna','orange','pear'];
//
//for ($i=0;$i < count($fruits);$i++){
//    echo $fruits[$i]."</br>";

//$i=0;
//    while ($i<=15){
//     echo $i.'</br>'; $i+=1;
//    }


//$i=0;
//    do{
//        echo $i.'</br>';
//        $i += 1;
//    }while($i <= 25);

// <=========================РАБОТА С ФАЙЛАМИ!!!

//    $fp = fopen("beetroot/file.txt","a+");
//    // r
//    // r+
//    // w
//    // w+
//    // a
//    // a+
//    $text = "Hello,mfka"/n;
//    fwrite($fp,$text);
//    fclose($fp);

//$array = ['5'=>'Sergey','10'=>'Alexander','15'=>'Alexey','20'=>'Anna', '25'=>'Tanya'];
//foreach ($array as $key => $val) {
//
//    echo "<pre>";
//    echo "$key = $val";
//    echo "</pre>";
//}

//$chunks = array_chunk($array,2, true);
//$diff = array_diff($array1,$array2);

$array = ['5'=>'Sergey','10'=>'Alexander','15'=>'Alexey','20'=>'Anna', '25'=>'Tanya'];
asort($array);
var_dump(array_key_exists('10',$array));

?>