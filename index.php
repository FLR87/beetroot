<?php

error_reporting(-1);

if (isset($_POST['send'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
//    $text = "Login:" . $_POST['Login']
//        . "Email:" . $_POST['email']
//        . "Password:" . $_POST['password'];
//    file_put_contents("register.txt", $text);
}
//if (!empty($_FILES)) {
//    echo '<pre>';
//    print_r($_FILES);
//    echo '</pre>';
if (isset($_FILES['file'])) {
    if ($_FILES['file']['size'] > 5242880) { //5 MB restriction
//        echo "<script type='text/javascript'>alert('Uploaded file must be an less then 5mb!')</script>";
        echo '<script language="javascript">';
        echo 'alert("Uploaded file must be an less then 5mb!")';
        echo '</script>';
//        echo "Uploaded file must be an IMAGE(jpg, png, gif) less then 5mb!"; // File too big and not img pypes
    }
    if (getimagesize($_FILES['file'] = 0)) {
        echo '<script language="javascript">';
        echo 'alert("File must be an IMAGE(jpg, png, gif)!")';
        echo '</script>';
//        echo "File must be an IMAGE(jpg, png, gif)!";
    } else {
        // File within size restrictions and permitions;
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
        ?>
        <div>
            <img src='upload/<?php echo $_FILES['file']['name']; ?>' width="200px" height="200px">
        </div>
        <?php
    }
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <p>
        Name: <input type="text" placeholder="name" name="name" minlength="4"
                     pattern="[a-zA-Z]{1,}" required
                     value="<?= ($_POST['name']) ? $_POST['name'] : "" ?>">
    </p>

    <p>
        Login: <input type="text" placeholder="login" name="login"
                      value="<?= ($_POST['login']) ? $_POST['login'] : "" ?>">
    </p>
    <p>
        Email: <input type="email" placeholder="email" name="email"
                      value="<?= ($_POST['email']) ? $_POST['email'] : "" ?>">

    </p>
    <p>
        Password: <input type="password" placeholder="password" name="pasword" minlength="4" maxlength="12" >
    </p>
    <p>
        Birth Date: <input type="date" placeholder="date" name="date"
                           value="<?= ($_POST['date']) ? $_POST['date'] : "" ?>">
    </p>
    <p>
        Avatar: <input type="file" name="file">
    </p>
    <button type="submit" name="send" value="test">Register</button>
    </p>
</form>


</body>
</html>