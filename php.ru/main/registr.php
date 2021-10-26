<?
$time = date_default_timezone_set('Europe/Moscow');
function timezone ()
{
    if(date('H') >8 && date('H') < 20) {
        echo "../main/styles/registr.css";
    }
    else{
        echo "../main/styles/night_style_registr.css";
    }
}
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
    <title>Регистрация</title>
</head>
<body>
<div class="header"
<div class="header_section">
    <div class="header_menu headerlogo">
        <a href="https://fact.digital/">ФАКТ</a>
    </div>
    <div class="header_section">
        <div class="header_menu headerbutton"><a href="../main/form.html">Таблица</a></div>
        <div class="header_menu headerbutton"><a href="../main/test.php">PHP</a></div>
        <div class="header_menu headerbutton"><a href="../main/index.php">Вернуться</a></div>
    </div>
</div>


<main>
    <div class="circle"></div>
    <div class="register_form">
        <h1 class="form-title">
            Регистрация
        </h1>
        <div class="form-fields">
            <div class="form-field">
                <input type="text" placeholder="Имя или логин">
            </div>
            <div class="form-field">
                <input type="text" placeholder="Пароль">
            </div>
            <div class="form-field">
                <input type="text" placeholder="Введите пароль еще раз">
            </div>
            <div class="form-buttons">
                <button class="button"> Регистрация </button>
                <div class="divider">Вы уже зарегистрированы? </div>
                <a href="../main/login.php" class="button button_login""> Вход </a>
            </div>
        </div>
    </div>
</main>
</body>
</html>