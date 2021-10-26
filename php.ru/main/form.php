<?
session_start();
$index4="В последний раз Вы были на Таблица";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index4;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Mend</title>
    <link rel="stylesheet" href="../main/styles/tablmend.css">
</head>
<body>
<table class="table" cellspacing="0">
    <caption>Таблица Менделеева</caption>
    <tr>

        <td valign="top" class="cell1"> <p align="right" class="p1">11</p>
            <p class="style">Na</p>
        <p class="p2" style="font-size: 20px">22,9898</p>
            <p class="style">Натрий</p>
        </td>
        <td valign="top" class="cell1"> <p align="right" class="p1">12</p>
        <p class="style">Mg</p>
        <p class="p2" style="font-size: 20px">24,312</p>
        <p class="style">Магний</p>
        </td>
        <td valign="top" class="cell2"> <p align="right" class="p1">13</p>
            <p class="style">Al</p>
            <p class="p2" style="font-size: 20px">26,9815</p>
            <p class="style">Алюминий</p>
        </td>
        <td valign="top" class="cell2"> <p align="right" class="p1">14</p>
            <p class="style">Si</p>
            <p class="p2" style="font-size: 20px">28,0816</p>
            <p class="style">Кремний</p>
        </td>
    </tr>
    <tr>
        <td valign="top" class="cell1"> <p align="right" class="p1">19</p>
            <p class="style">K</p>
            <p class="p2" style="font-size: 20px">39,102</p>
            <p class="style">Калий</p>
        </td>
        <td valign="top" class="cell1"> <p align="right" class="p1">20</p>
            <p class="style">Ca</p>
            <p class="p2" style="font-size: 20px">40,08</p>
            <p class="style">Калций</p>
        </td>
        <td valign="top" class="blue"> <p align="left" class="p1">21</p>
            <p class="style1" align="right">Sc</p>
            <p class="p3" style="font-size: 20px">44,956</p>
            <p class="style1" align="right">Cкандий</p>
        </td>
        <td valign="top" class="blue"> <p align="left" class="p1">22</p>
            <p class="style" align="right">Ti</p>
            <p class="p3" style="font-size: 20px">47,90</p>
            <p class="style" align="right">Титан</p>
        </td>
    </tr>
    <tr>
        <td valign="top" class="blue"> <p align="left" class="p1">29</p>
            <p class="style" align="right">Cu</p>
            <p class="p3" style="font-size: 20px">63,546</p>
            <p class="style" align="right">Медь</p>
        </td>
        <td valign="top" class="blue"> <p align="left   " class="p1">30</p>
            <p class="style" align="right">Zn</p>
            <p class="p3" style="font-size: 20px">65,37</p>
            <p class="style" align="right">Цинк</p>
        </td>
        <td valign="top" class="cell2"> <p align="right" class="p1">31</p>
            <p class="style">Ga</p>
            <p class="p2" style="font-size: 20px">69,72</p>
            <p class="style">Галлий</p>
        </td>
        <td valign="top" class="cell2"> <p align="right" class="p1">32</p>
            <p class="style">Ge</p>
            <p class="p2" style="font-size: 20px">72,59</p>
            <p class="style">Германий</p>
        </td>
    </tr>
    <tr>
        <td valign="top" class="cell1"> <p align="right" class="p1">37</p>
            <p class="style">Rb</p>
            <p class="p2" style="font-size: 20px">85,47</p>
            <p class="style">Рубидий</p>
        </td>
        <td valign="top" class="cell1"> <p align="right" class="p1">38</p>
            <p class="style">Sr</p>
            <p class="p2" style="font-size: 20px">87,62</p>
            <p class="style">Стронций</p>
        </td>
        <td valign="top" class="blue"> <p align="left" class="p1">39</p>
            <p class="style" align="right">Y</p>
            <p class="p3" style="font-size: 20px">88,905</p>
            <p class="style">Иттрий</p>
        </td>
        <td valign="top" class="blue"> <p align="left" class="p1">40</p>
            <p class="style" align="right">Zr</p>
            <p class="p3" style="font-size: 20px">91,22</p>
            <p class="style">Цирконий</p>
        </td>
    </tr>
</table>

 <form action="../main/index.php">
     <p style="text-align: center"> <button> Вернуться на главную страницу назад </button> </p>
</form>
<form action="../main/text.php">
    <p style="text-align: center"> <button> Вернуться назад </button> </p>
</form>
</body>
</html>