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
    <title>Аренда студии звукозаписи</title>
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
                <h3 class="header-end__title">Аренда студии на заказ</h3>
                <div class="header-end__box">
                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/rent/headset.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Аренда со звукорежиссером</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/rent/sound-waves.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Аренда без звукорежиссера</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/rent/studio-headphones.png" alt="" class="header-end__icons"></button>
                        <p class="header-end__text">Программы и плагины</p>
                    </div>
                </div>
                <button class="header-end__btn">Заказать</button>
            </div>
        </section>

        <!-- <section class="gallery"></section> -->

        <section class="description">
            <div class="container">
                <div class="description__two">
                    <div class="description__item">
                        <img src="image/img/rent/description-one.png" alt="description-one" class="description__img">
                    </div>

                    <div class="description__box">
                        <h1 class="description__title">АРЕНДА СТУДИИ СО ЗВУКОРЕЖИСЕРОМ</h1>
                        <p class="description__text">Запись вокала</p>
                        <p class="description__text">Запись дикторского голоса</p>
                        <p class="description__text">Тюнинг и ритмическая коррекция</p>
                        <p class="description__text"> Работа над аранжировкой (оплачивается по тарифу почасовой работы аранжировщика 2500р/час)</p>
                        <p class="description__text">Сведение и мастеринг в вашем присутствии (оплачивается по тарифу сведения)</p>
                    </div>
                </div>

                <div class="description__two">
                    <div class="description__box">
                        <h1 class="description__title">АРЕНДА СТУДИИ БЕЗ ЗВУКОРЕЖИСЕРОМ</h1>
                        <p class="description__text">Sound Card FOCUSRITE saffire pro 14</p>
                        <p class="description__text">Studio monitors ADAM A7</p>
                        <p class="description__text">Studio Monitor Headphones Beyerdynamic DT 770 Pro</p>
                        <p class="description__text">MIC Oktava МКЛ-5000</p>
                        <p class="description__text">Tube preamp ART PRO MPA II</p>
                        <p class="description__text">Compressor DBX 166XSV</p>
                        <p class="description__text">Compressor DIGILAB SPL-300</p>
                    </div>

                    <div class="description__item">
                        <img src="image/img/rent/description-two.png" alt="description-two" class="description__img">
                    </div>
                </div>

                <div class="description__two">
                    <div class="description__item">
                        <img src="image/img/rent/description-tree.png" alt="description-tree" class="description__img">
                    </div>

                    <div class="description__box">
                        <h1 class="description__title">ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ</h1>
                        <p class="description__text">Steinberg Cubase 11 Pro</p>
                        <p class="description__text">Slate Digital</p>
                        <p class="description__text">FabFilter</p>
                        <p class="description__text">Sound Toys</p>
                        <p class="description__text">Softube Tube-Tech Equalizer Collection</p>
                        <p class="description__text">Revoice pro 3</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stages-two">
            <div class="container">
                <h2 class="stages-two__title-two">ЧАСТЫЕ ВОПРОСЫ КЛИЕНТОВ</h2>
                <div class="list__box">
                    <div class="list__one">
                        <ul class="list">
                            <li class="list__item-two" id="1">
                                <div class="list__box">
                                    <h2 class="list__text-two">Можно ли арендовать студию на ночь?</h2>
                                    <button data-tab="1" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">Снять звукозаписывающую студию в аренду на ночь, можно только на полную смену (8 часов) и по предварительной договоренности с менеджером.</p>
                            </li>
    
                            <li class="list__item-two" id="2">
                                <div class="list__box">
                                    <h2 class="list__text-two">Что запрещено при аренде студии?</h2>
                                    <button data-tab="2" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">Распитие алкогольных напитков, находится в алкогольном или наркотическом опьянении, курить сигареты, электронные сигареты и вейб (для этого есть специально отведенное место)</p>
                            </li>
                        </ul>
                    </div>
    
                    <div class="list__two">
                        <ul class="list">
                            <li class="list__item-two" id="3">
                                <div class="list__box">
                                    <h2 class="list__text-two">Есть ли скидки постоянным клиентам?</h2>
                                    <button data-tab="3" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">Мы предоставляем скидки от записи 3-х песен. Если вы арендуете студию на целый день с почасовой оплатой, действует скидка —10%</p>
                            </li>
    
                            <li class="list__item-two" id="4">
                                <div class="list__box">
                                    <h2 class="list__text-two">Какие правила посещения студии?</h2>
                                    <button data-tab="4" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">Если вы хотите отменить бронь или опаздываете, пожалуйста предупредите администратора за ранее. У нас есть Wi-Fi и вы можете скачать нужный вам материал, но мы рекомендуем приносить файлы с собой на флэш носителе</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-rent">
            <div class="container">
                <h2 class="services-rent__title">КОМУ НУЖНО ПОДАРИТЬ СЕРТИФИКАТ НА ЗАПИСЬ ПЕСНИ В NEW SOUND?</h2>
                <div class="services-rent__two">
                    <div class="services-rent__item">
                        <img src="image/img/rent/services.png" alt="" class="services-rent__image">
                    </div>

                    <div class="services-rent__box">
                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Запись вокала, дикторского голоса, музыкальных инструментов)</p>
                        </div>

                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Все оборудовании перечисленное на сайте</p>
                        </div>

                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Бесплатная парковка</p>
                        </div>

                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Зона ожидания и отдыха, уборная</p>
                        </div>  
                        
                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Комната сведения и мастеринга</p>
                        </div>  

                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Вокальная комната</p>
                        </div>

                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Wi-Fi</p>
                        </div>

                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Микроволновка, холодильник, кулер</p>
                        </div>  
                        
                        <div class="services-rent__boxing">
                            <img src="image/icons/rent/des.png" alt="des" class="services-rent__img">
                            <p class="services-rent__text">Кондиционер</p>
                        </div>  
                    </div>
                </div>
            </div>
        </section>

        <section class="packages">
            <div class="container">
                    <h2 class="packages__title">ЦЕНЫ НА АРЕНДУ СТУДИИ И ЗВУКОЗАПИСЬ</h2>                
                <div class="packages__two">
                    <div class="packages__item">
                        <h1 class="packages__box-title">АРЕНДА В ЧАС</h1>
                        <p class="packages__text-price">3500 ₽</p>
                        <img src="image/img/rent/services-price.png" alt="reviews" class="packages__img">
                        <p class="packages__text packages__green">Оплата в час</p>
                        <p class="packages__text">Включены работы:</p>
                        <p class="packages__text">Запись голоса / Инструментов</p>
                        <p class="packages__text">Тюнинг</p>
                    </div>

                    <div class="packages__item">
                        <h1 class="packages__box-title">БЕЗЛИМИТ</h1>
                        <p class="packages__text-price">3500 ₽</p>
                        <img src="image/img/rent/services-price.png" alt="reviews" class="packages__img">
                        <p class="packages__text packages__green">Безлимит (1день)</p>
                        <p class="packages__text">Включены все виды работ</p>
                        <p class="packages__text">Запись голоса / Инструментов</p>
                        <p class="packages__text">Тюнинг</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="price">
            <div class="container">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'arrangement')">Аранжировка</button>
                    <button class="tablinks" onclick="openCity(event, 'rent')">Аренда студии</button>
                    <button class="tablinks" onclick="openCity(event, 'certificate')">Сертификаты</button>
                    <button class="tablinks" onclick="openCity(event, 'track-recording')">Запись трека</button>
                    <button class="tablinks" onclick="openCity(event, 'compilation')">Сведение и мастеринг</button>
                </div>

                <div id="arrangement" class="tabcontent">
                    <div class="price__two">
                        <div class="price__item">
                            <h1 class="price__box-title">Аранжировка удаленно</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text">Аранжировка, написание текста песни, передача авторских прав, размещение на iTunes</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Аранжировка под ключ</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Бесплатное демо, аранжировка, написание текста песни, безлимитная запись вокала, передача авторских прав, размещение на iTunes</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Песня под ключ</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Бесплатное демо, аранжировка, написание текста песни, безлимитная запись вокала, передача авторских прав, размещение на iTunes, бэк вокалист</p>
                            <button class="price__btn">Заказать</button>
                        </div>
                    </div>
                </div>
                
                <div id="rent" class="tabcontent">
                    <div class="price__two">
                        <div class="price__item">
                            <h1 class="price__box-title">Стандарт</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text">1 час записи, обработка, готовый трек до 7 дней, 1 вокалист</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Комфорт</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">2 часа записи, отбор лучших дублей, обработка, готовый трек до 7 дней, 1 вокалист</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Комфорт +</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Безлимитная запись, отбор лучших дублей, VIP тюнинг вокала, обработка, готовый трек (48 часов), коррекция ритмики, продюсирование, 1-2 вокалиста</p>
                            <button class="price__btn">Заказать</button>
                        </div>
                    </div>
                </div>
                
                <div id="certificate" class="tabcontent">
                    <div class="price__two">
                        <div class="price__item">
                            <h1 class="price__box-title">Сертификат</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Безлимитная запись, отбор лучших дублей, VIP тюнинг вокала, обработка, коррекция ритмики, продюсирование голоса</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Сертификат + Фотоссесия</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Безлимитная запись, отбор лучших дублей, VIP тюнинг вокала, обработка, коррекция ритмики, продюсирование голоса, фотоссесия с записи</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Сертификат + Виодеоклип</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Безлимитная запись, отбор лучших дублей, VIP тюнинг вокала, обработка, коррекция ритмики, продюсирование голоса, видеоклип с записи</p>
                            <button class="price__btn">Заказать</button>
                        </div>
                    </div>
                </div>

                <div id="track-recording" class="tabcontent">
                    <div class="price__two">
                        <div class="price__item">
                            <h1 class="price__box-title">Стандарт</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text">1 час записи, обработка, готовый трек до 7 дней, 1 вокалист</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Комфорт</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">2 часа записи, отбор лучших дублей, обработка, готовый трек до 7 дней, 1 вокалист</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Комфорт +</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text packages__green">Безлимитная запись, отбор лучших дублей, VIP тюнинг вокала, обработка, готовый трек (48 часов), коррекция ритмики, продюсирование, 1-2 вокалиста</p>
                            <button class="price__btn">Заказать</button>
                        </div>
                    </div>
                </div>

                <div id="compilation" class="tabcontent">
                    <div class="price__two">
                        <div class="price__item">
                            <h1 class="price__box-title">Вокал + минусовка</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text">Ручной тюнинг нот, сведение голоса с минусовкой (качество зависит от исходников), мастеринг в подарок</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Сведение мультитрека</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text">Сведение по дорожкам (мультитрек, качество радио формата), мастеринг в подарок</p>
                            <button class="price__btn">Заказать</button>
                        </div>

                        <div class="price__item">
                            <h1 class="price__box-title">Мастеринг трека</h1>
                            <p class="price__text-price">3500 ₽</p>
                            <img src="image/img/price-img.png" alt="reviews" class="price__img">
                            <p class="price__text">Мастеринг (эквализация, компрессия, сатурация, максимизация)</p>
                            <button class="price__btn">Заказать</button>
                        </div>
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
