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
    <title>Мастеринг</title>
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
                <h3 class="header-end__title">Мастеринг</h3>
                <div class="header-end__box">
                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/mastering/itunes.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Мастеринг под iTunes</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/mastering/music-note.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">«Стем» мастеринг</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/mastering/studio-headphones.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Аналоговое оборудование</p>
                    </div>
                </div>
                <button class="header-end__btn">Заказать</button>
            </div>
        </section>

        <section class="order">
            <div class="container">
                <h2 class="order__title">ПРЕИМУЩЕСТВА МАСТЕРИНГА ТРЕКА В NEW SOUND?</h2>
                <p class="order__text">Мастеринг трека, является самым важным и последним этапом при создании музыкальной композиции. Именно с помощью мастеринга, трек обретает нужную громкость и плотность звучания.</p>
                <p class="order__text-two">Наша студия звукозаписи New Sound делает профессиональный мастеринг песен в соответствии с современными тенденциями музыкального рынка. Мы делаем мастеринг через аналоговое оборудование студии, что дает миксу эталонное западное звучание.</p>
            </div>
        </section>

        <section class="stem-mastering">
            <div class="container">
                <h2 class="stem-mastering__title">СТЕМ МАСТЕРИНГ</h2>
                <hr class="stem-mastering__des">
                <div class="stem-mastering__two">
                    <div class="stem-mastering__box">
                        <p class="stem-mastering__text">Что такое Стем-мастеринг?</p>
                        <p class="stem-mastering__text">Это оптимальный вариант для тех, кто хотел бы дать больше возможностей в обработке звука мастеринг-инженеру для более качественного результата. Стем-мастеринг поможет в случае некачественного сведения и не правильного баланса инструментов.</p>
                        <p class="stem-mastering__text">Мастеринг-инженер получает группы инструментов, что позволяет выставить их в правильном балансе относительно друг друга, а также частотно эквализировать и компрессировать материал. Далее группы суммируются и делается финальный аналоговый мастеринг трека.
                            Стем-мастеринг делает звучание микса более плотным и громким.</p>
                    </div>
                    <div class="stem-mastering__item">
                        <img src="image/img/mastering/image-mastering.png" alt="" class="stem-mastering__img">
                    </div>
                </div>
            </div>
        </section>

        <section class="service-mastering">
            <div class="container">
                <h2 class="service-mastering__title">ХОТИТЕ КОММЕРЧЕСКОЕ СВЕДЕНИЕ ВАШЕГО ТРЕКА?</h2>
                <hr class="service-mastering__des">
                <p class="service-mastering__text">Что бы трек звучал коммерчески — нужна профессиональная аранжировка! 90% качественного звучания зависит от подбора звуков и тембров</p>
                <button class="service-mastering__btn">Заказать аранжировку</button>
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
                                    <h2 class="list__text">Сколько стоит мастеринг?</h2>
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
                                    <h2 class="list__text">Сколько времени делается мастеринг?</h2>
                                    <button data-tab="3" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Готовый результат мы предоставляем в течении 5-7 дней. Ели вам нужен срочное сведение, укажите это при заказе и мы учтем это при сведении.</p>
                            </li>
    
                            <li class="list__item" id="4">
                                <div class="list__box">
                                    <h2 class="list__text">Что нельзя исправить при мастеринге?</h2>
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
    
</body>
</html>