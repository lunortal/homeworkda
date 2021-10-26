<?
session_start();
$index="В последний раз Вы были на FACT";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index;
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
    <title>Document</title>
</head>
<body>
<h1> Сайт FACT</h1>
<form method="post">
    login
    <p>
        <input type="text" name="login2">
    </p>
    password
    <p>
        <input type="password" name="password2">
    </p>
    <p>
        <input type="submit">
    </p>
</form>
</body>
</html>