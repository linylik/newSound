<?php 

    session_start();

    include("login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>New Sound</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="main-menu">
                <a href="index.php"><img src="image/icons/logo.png" alt="logo" class="main-menu_logo"></a>
                <ul class="main-menu main-menu_left">
                    <li class="main-menu__items"><a href="arrangement.php" class="main-menu__link">Аранжировка на заказ</a></li>
                    <li class="main-menu__items"><a href="certificate.php" class="main-menu__link">Подарочный сертификат</a></li>
                    <li class="main-menu__items"><a href="track-recording.php" class="main-menu__link">Запись трека в студии</a></li>
                    <div class="dropdown">
                        <button class="main-menu__link dropbtn">Еще услуги</button>
                        <div class="dropdown-content">
                          <a href="rent.php" class="dropdown-text">Аренда студии звукозаписи</a>
                          <a href="compilation.php" class="dropdown-text">Сведение и мастеринг</a>
                          <a href="mastering.php" class="dropdown-text">Мастеринг</a>
                          <a href="distribution.php" class="dropdown-text">Дистрибуция</a>
                        </div>
                      </div>                 
                </ul>
                <ul class="main-menu main-menu_right">
                    <li class="main-menu__item"><button href="#" class="main-menu__link start_form"><img src="image/icons/user.png" alt="profile" class="icons"></button></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="privat">
            <div class="container">
                <div class="privat__row">
                    <img src="image/icons/lk/gender.png" alt="gender.png" class="privat__img">
                    <div class="privat__boxing">
                        <div class="privat__box">
                            <p class="privat__item">Пользователь:</p>
                            <?=$_SESSION['login']?><p class="privat__inf"></p>
                        </div>
                        <div class="privat__box">
                            <p class="privat__item">Почта:</p>
                            <?=$_SESSION['email']?><p class="privat__inf"></p>
                        </div>
                        <div class="privat__box">
                            <p class="privat__item">Телефон:</p>
                            <?=$_SESSION['telephone']?><p class="privat__inf"> </p>
                        </div>
                    </div>

                    <a href='exit.php'><button class="privat__btn">Выйти</button></a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section class="item">
                <div class="container">
                    <div class="footer">
                        <div class="footer__box">
                            <img src="image/icons/gps.png" alt="gps" class="footer__img">
                            <p class="footer__text">г. Москва, Савеловский бульвар, ул.Озерная, дом 10, корпус 2</p>
                        </div>
    
                        <div class="footer__box">
                            <img src="image/icons/mail.png" alt="mail" class="footer__img">
                            <p class="footer__text">info@acousticrecords.ru</p>
                        </div>
    
                        <div class="footer__box-two">
                            <p class="footer__text-two">Реквизиты:</p>
                            <p class="footer__text-two">БИК: 044525225</p>
                            <p class="footer__text-two">ОГРН: 319774600111352</p>
                            <p class="footer__text-two">ИНН: 773273946406</p>
                        </div>
                    </div>
                </div>
        </section>
    </footer>

    <script src="main.js"></script>

</body>
</html>
