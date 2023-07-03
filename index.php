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
                    <li class="main-menu__item">
                    <?php 
                        if(!empty($_SESSION['login'])) {
                            echo '<a href="lk.php">' . $_SESSION['login'] . '</a>';
                        }

                        if(empty($_SESSION['login'])) {
                            echo '<li class="main-menu__item"><button class="main-menu__link start_form"><img src="image/icons/user.png" alt="profile" class="icons"></button></li>';
                        }
                    ?>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        
        <section class="header-end">
            <div class="container">
                <h3 class="header-end__title">NEW SOUND</h3>
                <div class="header-end__box">
                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/home/microphone.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Безлимитная запись вокала</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/home/icons-one.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Набросок – 0 ₽</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/home/gift-box.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Подарочные сертификаты</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="order">
            <div class="container">
                <h2 class="order__title">КАК ПРОДАТЬ СВОЮ МУЗЫКУ В ИНТЕРНЕТЕ?</h2>
                <p class="order__text">New Sound — это профессиональная студия аудио и видео продакшна, которая предоставляет полный цикл производства. Работаем в индустрии звукозаписи более 13 лет. Делаем недорого и с гарантией качества!</p>

                <div class="order__row">
                    <div class="order__box-one">
                        <a href="track-recording.php"><h3 class="order__title-box">Запись песни в студию</h3></a>
                    </div>

                    <div class="order__box-two">
                        <a href="arrangement.php"><h3 class="order__title-box">Аранжировка песни</h3></a>
                    </div>

                    <div class="order__box-tree">

                        <a href="certificate.php"><h3 class="order__title-box">Подарочный сертификат</h3></a>
                    </div>
                </div>

                <div class="order__row-two">
                    <div class="order__box-hour">
                        <a href="compilation.php"><h3 class="order__title-box">Сведение и мастеринг</h3></a>
                    </div>

                    <div class="order__box-five">
                        <a href="distribution.php"><h3 class="order__title-box">Покупка готовой песни</h3></a>
                    </div>
                </div>  
            </div>
        </section>

        <section class="disctribition-home">
            <div class="container">
                <h2 class="disctribition-home__title">ДИСТРИБУЦИЯ</h2>

                <div class="disctribition-home__row">

                    <div class="disctribition-home__item">
                        <img src="image/img/home/img-home.png" alt="img-home" class="disctribition-home__img">
                    </div>

                    <div class="disctribition-home__box">
                        <p class="disctribition-home__text">Заказывая аранжировку в студии Acoustic Records, вы получаете дистрибуцию трека на всех музыкальных площадках в подарок. Только с нами вы зарабатывайте 100% с продаж на своем творчестве.</p>
                        <div class="disctribition-home__box-two">
                            <div class="disctribition-home__des">
                                <img src="image/icons/home/des.png" alt="design" class="disctribition-home__img-des">
                                <p class="disctribition-home__text-des">Вконтакте</p>
                            </div>
                            <div class="disctribition-home__des">
                                <img src="image/icons/home/des.png" alt="design" class="disctribition-home__img-des">
                                <p class="disctribition-home__text-des">Apple Music</p>
                            </div>
                            <div class="disctribition-home__des">
                                <img src="image/icons/home/des.png" alt="design" class="disctribition-home__img-des">
                                <p class="disctribition-home__text-des">Яндекс Музыка</p>
                            </div>
                            <div class="disctribition-home__des">
                                <img src="image/icons/home/des.png" alt="design" class="disctribition-home__img-des">
                                <p class="disctribition-home__text-des">iTunes</p>
                            </div>
                            <div class="disctribition-home__des">
                                <img src="image/icons/home/des.png" alt="design" class="disctribition-home__img-des">
                                <p class="disctribition-home__text-des">Spotify</p>
                            </div>
                        </div>
                        <a href><button class="disctribition-home__btn">Заказать аранжировку </button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews-two">
            <div class="container">
                <h2 class="reviews__title">ОТЗЫВЫ ОБЛАДЕТЕЛЕЙ СЕРТИФИКАТА</h2>
                <div class="reviews__box">
                    <div class="reviews__item">
                        <h1 class="reviews__box-title">Анна</h1>
                        <img src="image/img/certificate/reviews.png" alt="reviews" class="reviews__img">
                        <p class="reviews__text">Я очень благодарна команде студии и рада, что моя первая песня и видеоклип были записаны именно в New Sound! Я очень переживала за процесс, так как опыта записи в студии у меня не было. Я была приятна удивлена, что студии бывают такие уютные и с приятной творческой атмосферой!</p>
                    </div>

                    <div class="reviews__item">
                        <h1 class="reviews__box-title">Ксения</h1>
                        <img src="image/img/certificate/reviews.png" alt="reviews" class="reviews__img">
                        <p class="reviews__text">Покупала сертификат на запись песни в подарок молодому человеку. Он был безумно рад, сказал, что это лучший подарок - впечатление, который он мог ожидать. Студия и ребята — просто топ. Помогли справится с волнением и поверить в себя. </p>
                    </div>

                    <div class="reviews__item">
                        <h1 class="reviews__box-title">Алексей</h1>
                        <img src="image/img/certificate/reviews.png" alt="reviews" class="reviews__img">
                        <p class="reviews__text">Записывали с подругами песню по подарочному сертификату. Спасибо огромное звукорежиссёру Алексею за терпение и помощь на записи. С нами было точно непросто, так как мы совсем не вокалистки, но с профессионалом было очень комфортно, мы не чувствовали себя бездарями.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stages">
            <div class="container">
                <h2 class="stages__title">ЧАСТЫЕ ВОПРОСЫ КЛИЕНТОВ</h2>
                <div class="list__box">
                    <div class="list__one">
                        <ul class="list">
                            <li class="list__item" id="1">
                                <div class="list__box">
                                    <h2 class="list__text">Что если мне не понравится результат?</h2>
                                    <button data-tab="1" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Если Вам что то не понравится в сведении и мастеринге, то мы бесплатно внесем поправки с учетом ваших пожеланий.</p>
                            </li>
    
                            <li class="list__item" id="2">
                                <div class="list__box">
                                    <h2 class="list__text">Сколько стоит сведение и мастеринг?</h2>
                                    <button data-tab="2" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Стоимость услуг на сведение и мастеринг зависит от сложности проекта (количества дорожек)</p>
                            </li>
                        </ul>
                    </div>
    
                    <div class="list__two">
                        <ul class="list">
                            <li class="list__item" id="3">
                                <div class="list__box">
                                    <h2 class="list__text">Сколько времени делается сведение трека?</h2>
                                    <button data-tab="3" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Готовый результат мы предоставляем в течении 5-7 дней. Ели вам нужен срочное сведение, укажите это при заказе и мы учтем это при сведении.</p>
                            </li>
    
                            <li class="list__item" id="4">
                                <div class="list__box">
                                    <h2 class="list__text">Что нельзя исправить при сведении трека?</h2>
                                    <button data-tab="4" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Неправильное расположение микрофона при записи инструмента или вокала, ошибки аранжировки (подбор инструментов), неправильное акустическое помещение при записи (реверберация комнаты)</p>
                            </li>
                        </ul>
                    </div>
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
    <script src="https://unpkg.com/imask"></script>

</body>
</html>
