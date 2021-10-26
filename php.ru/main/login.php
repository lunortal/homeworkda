<?
$time = date_default_timezone_set('Europe/Moscow');
function timezone ()
{
    if(date('H') >8 && date('H') < 20) {
        echo "../main/styles/registr.css";
    }
    else{
        echo "../main/styles/night_style_login.css";
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
    <title>Вход</title>
</head>
<body>
<div class="header"
<div class="header_section">
    <div class="header_menu headerlogo">
        <a href="https://fact.digital/">ФАКТ</a>
    </div>
    <div class="header_section">
        <div class="header_menu headerbutton"><a href="../main/form.php">Таблица</a></div>
        <div class="header_menu headerbutton"><a href="../main/test.php">PHP</a></div>
        <div class="header_menu headerbutton"><a href="../main/index.php">Вернуться</a></div>
    </div>
</div>


<main>
    <form method="post" action="login.php">
    <div class="circle"></div>
    <div class="register_form" style="height: 320px">
        <h1 class="form-title">
            Вход.
            <?
            if(count($_POST)>0){
                $login=md5(trim($_POST['login']));
                $password=md5(trim($_POST['password']));
                if($login == ' ' || $password == ' ')
                {
                    echo 'Заполните пустые поля';
                }
                elseif ($password == '827ccb0eea8a706c4c34a16891f84e7b' & $login == '1a8b8e54b53f63a8efae84e064373f19')
                {
                    header("Location: ../main/text.php");

                }
                else {
                    echo 'Неверный логин или пароль';
                }
            }
            ?>
        </h1>
        <div class="form-fields">
            <div class="form-field" id="login">
                <input type="text" placeholder="Имя или логин" name="login">
            </div>
            <div class="form-field" id="password">
                <input type="password" placeholder="Пароль" name="password">
            </div>
            <div class="form-buttons">
                <div class="form-buttons">
                    <button class="button"> Войти </button>
                    <a href="../main/index.php" class="button button_login" style="margin-top: 20px"> Вернуться в главное меню </a>
            </div>
        </div>
    </div>
    </form>
</main>
</body>
</html>