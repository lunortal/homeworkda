<?
date_default_timezone_set('Europe/Moscow');
if(date('H') >8 && date('H') < 20) {
    $style = "../main/styles/style.css";
}
else{
    $style = "../main/styles/night_style.css";
}

?>
<!doctype html>
<html lang="en">
<div>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $style;?>" type='text/css' media='all'>
    <link rel="stylesheet" href="../main/styles/adaptive.css" >
    <title>About me</title>
</head>
<body class="back">
<div class="header">
    <div class="header_section">
         <div class="headerlogo">
ФАКТ
</div>
    </div>
    <div class="header_section" valign="right">
        <div class="header_menu header_but"> <a href="../main/form.html" style="color: white;">Таблица Менделеева </a> </div>
    </div>
</div>
<main>
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
        <a href="../main/images/1.png" class="gallery-item" >
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

