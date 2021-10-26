<?
session_start();
$index3="В последний раз Вы были на PHP";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index3;
    }

}
?>
<!doctype html>
<html lang="en">
<div>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../main/styles/style.css" type='text/css' media='all'>
    <link rel="stylesheet" href="../main/styles/adaptive.css" >
    <title>About me</title>
    </head>
    <body class="back">
    <div class="header"
    <div class="header_section">
        <div class="header_menu headerlogo">
            <a href="https://fact.digital/">ФАКТ</a>
        </div>
        <div class="header_section">

            <div class="header_menu headerbutton"><a href="../main/form.html">Таблица</a></div>
            <div class="header_menu headerbutton"><a href="../main/test.php">PHP</a></div>
        </div>
    </div>
</div>

  <!--  <main>
        <img class="me">
        <h2 class="name" align="center">Данил Петрянкин </h2>
        <img class="photo" src="../main/images/me.jpg" alt="itsme">
        <table align="center" class="border" id="primary">
            <tr>
                <td class="info1"> Данил Петрянкин Вячеславович, родился 9 июля 2000 года в городе Магнитогорск.
                    Окончил школу №67 после чего поступил в Многопрофильный колледж по специальности
                    "Программирование в компьютерных системах". На данный момент обучаюсь в МГТУ им. Г.И. Носова
                    Увлекаюсь и интересуюсь программированием. В свободное время занимаюсь легкой атлетикой. </td>
                <td class="info2" valign="top"> На занятиях в школе Факт все посещенные занятия были мною освоены и понятны.
                    Информация доступная и понятная. </td>
        </table>
    </main>

    <h1 class="photogal"> Галлерея фото</h1>
    <section class="gallery">
        <div class="gallery-list">
            <a href="../main/images/1.png" class="gallery-item"  >
                <img src="../main/images/1.png" alt="alt" width="400px" height="400px" class="gg">
                <h3 align="center" class="img">Ошибка</h3>
            </a>
            <a href="../main/images/2.png" class="gallery-item">
                <img src="../main/images/2.png" alt="alt" width="400px" height="400px">
                <h3 align="center" class="img">Фриланс</h3>
            </a>
            <a href="../main/images/3.png" class="gallery-item">
                <img src="../main/images/3.png" alt="alt" width="400px" height="400px">
                <h3 align="center" class="img"> Создание проекта</h3>
            </a>
            <a href="../main/images/4.png" class="gallery-item">
                <img src="../main/images/4.png" alt="alt" width="400px" height="400px">
                <h3 align="center" class="img">Коллективная работа</h3>
            </a>
        </div>
    </section>

    <section class="gridgallery">
        <div class="gallery-grid">
            <a href="../main/images/6.jpg" class="gal" >

                <img src="../main/images/6.jpg" alt="alt" width="500px" height="400px" class="gg">
                <h3 align="center" class="img">Утренний пляж</h3>
            </a>
            <a href="../main/images/7.jpg" class="gal">
                <img src="../main/images/7.jpg" alt="alt" width="500px" height="400px" class="gg">
                <h3 align="center" class="img">Море</h3>
            </a>
            <a href="../main/images/8.jpg" class="gal">
                <img src="../main/images/8.jpg" alt="alt" width="500px" height="400px" class="gg">
                <h3 align="center" class="img">Облака</h3>
            </a>
            <a href="../main/images/9.jpg" class="gal">
                <img src="../main/images/9.jpg" alt="alt" width="500px" height="400px" class="gg">
                <h3 align="center" class="img"> Горы </h3>
            </a>
        </div>-->

    <?
    if(date('H') > 20 && date('H') < 07){
        $style = "../main/styles/night_style.css";
    }else{
        $style = "../main/styles/style.css";
    }
    date_default_timezone_set('America/Chicago');
echo "<div class='d1'>";
    echo "<h2> Домашнее задание PHP.</h2>" . "<br> <h3> Задча №1  </br> </h3> ";
    $mas1 = [];
    for ($i=0; $i<10; $i++){
        array_push($mas1, mt_rand(1,10));
    }
    foreach($mas1 as $value){
        if(($value % 2) == 0){
            echo "<br>" . "<b>" . $value . "</br>" . "</b>";
        }else
        {
            echo "<br>" . $value . "</br>";
        }
    }
 echo "</div>";
    echo "<div class='d2'>";
    echo "<h3> Задча №2 </h3> ";
    $eda = array(
        "Фрукты" => array("Мандарин", "Абрикос", "Манго", "Арбуз", "Персик"),
        "Овощи"  => array("Огурец", "Помидор", "Морковь", "Артишок"),
        "Орехи"  => array("Арахис", "Грецкий орех", "Фисташковый орех")
    );

    echo "<h4>Слова на букву А</h4>";

    foreach ($eda as $key => $pish) {
        foreach ($pish as $a) {
            if (mb_substr($a, 0, 1) === "А")
                echo $a . "<br/>";
        }
    }
    echo "</div>";
    echo "<div class='d3'>";
    echo "<h3> Задча №3 </h3>";
    $numbers = array(
        "number1" => array("15", "20", "25", "35", "54"),
        "number2"  => array("45", "123", "234", "32"),
        "number3"  => array("57", "26", "26"));
    foreach ($numbers as $num)
    {

    }
    echo count($numbers,1);
    echo "<br> 1 измерение " . count($numbers['number1'],COUNT_RECURSIVE). " элементов";
    echo "<br> 2 измерение " . count($numbers['number2'],COUNT_RECURSIVE). " элемента";
    echo "<br> 3 измерение " . count($numbers['number3'],COUNT_RECURSIVE). " элемента";
    echo "</div>";

    echo "<div class='d2'>";
    echo "<h3> Задча №5 (с занятия) </h3>";
    $arr = array(
        'Ivanovs' => array('Ivan', 'Kate', 'Tom', 'Same'),
        'Petrovs'=>array('Bob', 'Ann', 'Tanya', 'Same'),
        'Smith' => array('Kate', 'Same'));
    {
        $string = serialize($arr);
        echo substr_count($string, 'Ivan', 15) . '  имя Ivan' . "<br>";
        echo substr_count($string, 'Kate') . '  имя Kate' . "<br>";
        echo substr_count($string, 'Tom') . '  имя Tom' . "<br>";
        echo substr_count($string, 'Bob') . '  имя Bob' . "<br>";
        echo substr_count($string, 'Tanya') . '  имя Tanya' . "<br>";
        echo substr_count($string, 'Same') . '  имя Same' . "<br>";

        echo "</div>";
    }


    ?>
    <form action="../main/index.php">
        <p style="text-align: center"> <button> Вернуться на главную страницу </button> </p>
    </form>
<form action="../main/text.php">
<p style="text-align: center"> <button> Вернуться назад </button> </p>
</form>
</html>
