<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'joins');


function getDBConnect(){
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    return $mysqli;
}

if ($mysqli->connect_errno) {
    exit('Ошибка соединения с БД');
}

//$mysqli->set_charset('utf8');

function insertQuery($mysqli,$data) {

    $textareaVal = mysqli_real_escape_string($mysqli,$data['data']['textarea']);
    $fileName = 'upload/'. $data['files']['file']['name'];

    $query = "INSERT INTO user_message (umes_user_id,umes_mesages, umes_file) VALUES (1,'$textareaVal', '$fileName')";
    var_dump(mysqli_query($mysqli, $query));
};

function getQuery($mysqli) {
    $query = "SELECT * FROM messages ORDER BY mes_id DESC";
    $res = mysqli_query($mysqli, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
};
//$mysqli->close();
?>