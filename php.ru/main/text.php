<?
session_start();
$a="login";
$b="password";
setcookie(session_name(),session_id(),time()+365*24*3600);
if(count($_POST)>0)
{
    if($_POST["login"]==$a || $_POST["password"]==$b)
    {
        if (isset($_SESSION['page']))
        {
            foreach($_SESSION["page"] as $value)
            {
                echo $value;
            }
            exit;
        }
    }
}
else
{
    if (isset($_SESSION['page']))
    {
        foreach($_SESSION["page"] as $value)
        {

        }
    }
}

$time = date_default_timezone_set('America/Los_Angeles');
function timezone ()
{
    if(date('H') >8 && date('H') < 20) {
        echo "../main/styles/style.css";
    }
    else{
        echo "../main/styles/night_style.css";
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
        <div class="header_menu headerbutton"><a href="../main/factbitrix/bitrix.php">BITRIX</a></div>
        <div class="header_menu headerbutton"><a href="../main/factbitrix/fact.php">FACT</a></div>
        <div class="header_menu headerbutton"><a href="../main/form.php">Таблица</a></div>
        <div class="header_menu headerbutton"><a href="../main/test.php">PHP</a></div>
        <div class="header_menu headerbutton"><a href="../main/index.php">Вернуться</a></div>
    </div>
</div>
<?
echo $value . "<h3 align='center'> Приветствую, пользователь! </h3> ";

?>
<h2 align='center'>Отправить комментарий</h2>

<form action="sand.php" method="post">
    <div class="form">
    <input type="text" name="email" placeholder="Укажите e-mail" required style="margin-left: 23cm"> <br><br>
    <input type="text" name="fio" placeholder="Ваше ФИО" required style="margin-left: 23cm"> <br><br>
    <textarea cols="30" rows="5" placeholder="Введите сообщение" name="message" required="required" style="margin-left: 22cm"> </textarea> <br><br>
    <input type="submit" value="Отправить" name="sub1" style="margin-left: 24cm">
    </div>
</form>
</body>
</html>

