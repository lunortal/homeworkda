<?php
$time = date_default_timezone_set('Europe/Moscow');
function timezone ()
{
    if(date('H') >8 && date('H') < 20) {
        echo "../main/styles/style.css";
    }
    else{
        echo "../main/styles/night_style.css";
    }
}
$login ='Tom';
$to="example@mail.ru";
$from=trim($_POST['email']);
$fio= htmlspecialchars($_POST['fio']);
$fio = urldecode($_POST['fio']);
$message = trim($_POST['fio']);
$message = htmlspecialchars($_POST['message']);
$message = urldecode($_POST['message']);
$message = trim($_POST['message']);

$headers = "From: $from" . "\r\n" .
    "FIO: " . $fio . "\r\n"

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php timezone(); ?>" type='text/css' media='all'>
    <link rel="stylesheet" href="../main/styles/adaptive.css" >
    <title>About me</title>
</head>
<body class="back">
<div class="header"
<div class="header_section">
    <div class="header_menu headerlogo">
        <a href="https://fact.digital/">ФАКТ</a>
    </div>
    <div class="header_php">
    </div>
    <div class="header_section">

        <div class="header_menu headerbutton"><a href="../main/form.php">Таблица</a></div>
        <div class="header_menu headerbutton"><a href="../main/test.php">PHP</a></div>
        <div class="header_menu headerbutton"><a href="../main/index.php">Вернуться</a></div>
    </div>
</div>
<?
echo '<h1 align="center">'.'Приветствую,  ' . $login . "</h1>";
    ?>
<h2 align="center">Отправить комментарий</h2>
<form action="sand.php" method="post">
    <?if (mail($to . " Тема: Комментарий с сайта ." ,$message, $headers)) {
        echo '<h3 align="center"> Письмо отправлено </h3><br>';
    }?>
    <input type="text" name="email" placeholder="Укажите e-mail" required style="margin-left: 23cm"> <br><br>
    <input type="text" name="fio" placeholder="Ваше ФИО" required style="margin-left: 23cm"> <br><br>
    <textarea cols="30" rows="5" placeholder="Введите сообщение" name="message" required="required" style="margin-left: 22cm"> </textarea> <br><br>
    <input type="submit" value="Отправить" name="sub1" style="margin-left: 24cm">
</form>
</body>
</html>