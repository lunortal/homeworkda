<?
session_start();
$index2="В последний раз Вы были на BITRIX";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index2;
    }

}

$color = false;
if (isset($_POST['do'])) {
    if ($_POST['select'] == 'red') {
        $color = 'style = "background-color: #F44;"';
    }
    elseif ($_POST['select'] == 'blue') {
        $color = 'style = "background-color: #4DD;"';

    }
    elseif ($_POST['select'] == 'green') {
        $color = 'style = "background-color: #CA1;"';
    }
}
?>
<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body <?=$color?>>
<form name="my" action="../text.php">

<form >
    <p style="text-align: center"> <button> Вернуться назад </button> </p>
</form>
</html>