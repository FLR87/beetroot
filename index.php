<?

$db = @mysqli_connect('localhost', 'root', '123456') or die('Ошибка соединения с базой');
if (!$db) die (mysqli_connect_error());
//var_dump($db);
mysqli_set_charset($db, "utf8") or die('не установлена кодировка');

$insert = "INSERT INTO `gb` (name, text) VALUES ('Оля','Lorem.')";
$res_insert = mysqli_query($db;
$insert);

?>