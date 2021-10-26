<?
if (isset($_POST['submit'])){
    if (!empty($_POST['color'])){
        setcookie('color', $_POST['color'], time() + (3600 * 24 * 30));
        $_COOKIE['color'] = $_POST['color'];
    }
}

if ($_POST['select'] == 'red') {
    $color = 'style = "background-color: #F44;"';
}
elseif ($_POST['select'] == 'blue') {
    $color = 'style = "background-color: #4DD;"';

}
elseif ($_POST['select'] == 'green') {
    $color = 'style = "background-color: #CA1;"';

}
elseif ($_POST['select'] == 'PowderBlue') {
    $color = 'style = "background-color: #B0E0E6;"';
}
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'PowderBlue';



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
<div class="header"
     <div class="header_section">
         <div class="header_menu headerlogo">
             <a href="https://fact.digital/">ФАКТ</a>
     </div>
         <div class="header_php">
             <?

             function count_days ()
             {
                 echo "Количество слова в поле Информация о себе, отзыв: " . str_word_count('Данил Петрянкин Вячеславович родился 9 июля 2000 года в городе Магнитогорск.
Окончил школу №67 после чего поступил в Многопрофильный колледж по специальности Программирование в компьютерных системах". На данный момент обучаюсь в МГТУ им. Г.И. Носова Увлекаюсь и интересуюсь программированием. В свободное время занимаюсь легкой атлетикой. На занятиях в школе Факт все посещенные занятия были мною освоены и понятны.
Информация доступная и понятна.',0);
                 $date1 = date_create("09-07-2000");
                 $date2 = date_create("12-10-2021");
                 $result = date_diff($date1,$date2);
                 echo " <br> Количество дней прошло: ". $result->days . "<br>";
             }
             count_days();


             function glasn ()
             {
                 $text_n = 'Данил Петрянкин Вячеславович родился 9 июля 2000 года в городе Магнитогорск.
Окончил школу №67 после чего поступил в Многопрофильный колледж по специальности Программирование в компьютерных системах". На данный момент обучаюсь в МГТУ им. Г.И. Носова Увлекаюсь и интересуюсь программированием. В свободное время занимаюсь легкой атлетикой. На занятиях в школе Факт все посещенные занятия были мною освоены и понятны.
Информация доступная и понятна.';
                 $vowelCount = preg_match_all('/[еёиоуыэюя]/iu',$text_n);
                 echo "Количество гласных букв: " . ($vowelCount);
             }
             glasn();

             ?>
         </div>
         <div class="header_section">

             <div class="header_menu headerbutton"><a href="../main/factbitrix/bitrix.php">BITRIX</a></div>
             <div class="header_menu headerbutton"><a href="../main/factbitrix/fact.php">FACT</a></div>
             <div class="header_menu headerbutton"><a href="../main/form.html">Таблица</a></div>
             <div class="header_menu headerbutton"><a href="../main/test.php">PHP</a></div>
             <div class="header_menu headerbutton"><a href="../main/registr.php">Регистрация</a></div>
     </div>
</div>

<main>

 <img class="me">
        <h2 class="name" align="center">Данил Петрянкин </h2>
            <img class="photo" src="../main/images/me.jpg" alt="itsme">
    <table align="center" class="border" id="primary">
            <tr>
                <td class="info1">
                    <?
                    function color()
                    {
                        $str2= "Данил Петрянкин Вячеславович, родился 9 июля 2000 года в городе Магнитогорск.";
                        echo str_replace(array("Данил Петрянкин Вячеславович, родился 9 июля 2000 года в городе Магнитогорск."), array("<font color='red'> Петрянкин Данил Вячеславович, 
родился 9 июля 2000 года в городе Магнитогорск. </font>"), $str2);
                    }
                    color();
                    ?>
Окончил школу №67 после чего поступил в Многопрофильный колледж по специальности
                    "Программирование в компьютерных системах". На данный момент обучаюсь в МГТУ им. Г.И. Носова
                    Увлекаюсь и интересуюсь программированием. В свободное время занимаюсь легкой атлетикой. <body bgcolor="<?=$color;?>">
                    </td>
                <td class="info2" valign="top">
                    <?
                    function chetn()
                    {
                        $text="На занятиях в школе Факт все посещенные занятия были мною освоены и понятны.
Информация доступная и понятная.";
                        $text_array=explode(' ', $text);
                        foreach ($text_array as $key => $value) {
                            if (($key % 2) ==1 ) {
                                echo ' ' .  "<font color='green'> $value </font>" . ' ';
                            }
                            else{
                                echo $value;
                            }
                        }
                    }
                    chetn();
                    ?>
                    <form method="post" action=""> <br>
                        <label style="font-size: 35px">Выберите цвет заднего фона: </label>
                        <p>

                            <select size="4" name="color">
                                <option value="red" <?php if ($_COOKIE['color']=='red') echo 'selected="selected"'?>>Красный</option>
                                <option value="blue" <?php if ($_COOKIE['color']=='blue') echo 'selected="selected"'?>>Синий</option>
                                <option value="green" <?php if ($_COOKIE['color']=='green') echo 'selected="selected"'?>>Зелёный</option>
                                <option value="PowderBlue" <?php if ($_COOKIE['color']=='PowderBlue') echo 'selected="selected"'?>>Стандарт</option>
                            </select>
                        </p>
                        <p><input type="submit" name="submit" value="Применить"></p>
                    </form>
                    </td>
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
        </div>
    </section>
</body>
</html>