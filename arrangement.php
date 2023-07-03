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
    <title>Аранжировка песни на заказ</title>
</head>
<body>
    <!-- Шапка с навигацией -->
    <header>
        <div class="container">
            <div class="main-menu"> 
                <a href="index.php"><img src="image/icons/logo.png" alt="logo" class="main-menu_logo"></a>
                <ul class="main-menu main-menu_left">
                    <li class="main-menu__items"><a href="arrangement.php" class="main-menu__link">Аранжировка на заказ</a></li>
                    <li class="main-menu__items"><a href="certificate.php" class="main-menu__link">Подарочный сертификат</a></li>
                    <li class="main-menu__items"><a href="track-recording.php" class="main-menu__link">Запись трека в студии</a></li>
                </ul>
                <div class="dropdown">
                    <button class="main-menu__link dropbtn">Еще услуги</button>
                    <div class="dropdown-content">
                        <a href="rent.php" class="dropdown-text">Аренда студии звукозаписи</a>
                        <a href="compilation.php" class="dropdown-text">Сведение и мастеринг</a>
                        <a href="mastering.php" class="dropdown-text">Мастеринг</a>
                        <a href="distribution.php" class="dropdown-text">Дистрибуция</a>
                    </div>
                </div>                 
                <ul class="main-menu main-menu_right">
                    <li class="main-menu__item">
                    <?php 
                        if(!empty($_SESSION['login'])) {
                            echo '<a href="lk.php" class="login__lk">' . $_SESSION['login'] . '</a>';
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
                <h3 class="header-end__title">Аранжировка на заказ</h3>
                <div class="header-end__box">
                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/arrangement/icons-one.png" alt="icons-one" class="header-end__icons"></button>
                        <p class="header-end__text">Набросок – 0 ₽</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/arrangement/icons-two.png" alt="icons-two" class="header-end__icons"></button>
                        <p class="header-end__text">Звучание радио формата</p>
                    </div>

                    <div class="header-end__item">
                        <button class="header-end__btn-animate"><img src="image/icons/arrangement/icons-tree.png" alt="icons-tree" class="header-end__icons"></button>
                        <p class="header-end__text">Песни под ключ</p>
                    </div>
                </div>
                <button class="header-end__btn">Заказать</button>
            </div>
        </section>

        <section class="order">
            <div class="container">
                <h2 class="order__title">ПОЧЕМУ СТОИТ ЗАКАЗАТЬ АРАНЖИРОВКУ ПЕСНИ В NEW SOUND?</h2>
                <p class="order__text">Сегодня решающим фактором станет ли песня популярной и узнаваемой, является современная аранжировка, а так же подбор уникальных тембров и звуков музыкальных инструментов.</p>
                <p class="order__text-two">Команда студии звукозаписи New Sound следит за тенденциями в музыкальной индустрии. Каждый музыкант нашей студии сфокусирован на конкретном стиле музыки, это дает вам гарантию современного звучания песни. Заказывая аранжировку песни в Acoustic Records вы получаете топовое и современное звучание за недорогую стоимость.</p>
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
                                    <h2 class="list__text">Сколько времени создается аранжировка?</h2>
                                    <button data-tab="1" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">В среднем полный цикл производства занимает до 14 дней.</p>
                            </li>
    
                            <li class="list__item" id="2">
                                <div class="list__box">
                                    <h2 class="list__text">Передаются ли авторские права?</h2>
                                    <button data-tab="2" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Да, после написания аранжировки, все авторские права на музыку принадлежат заказчику. </p>
                            </li>
    
                            <li class="list__item" id="3">
                                <div class="list__box">
                                    <h2 class="list__text">В каких жанрах работает студия?</h2>
                                    <button data-tab="3" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Команда New Sound следит за тенденциями в музыкальной индустрии, поэтому каждый аранжировщик сфокусирован на конкретном жанре музыки</p>
                            </li>
                        </ul>
                    </div>
    
                    <div class="list__two">
                        <ul class="list">
                            <li class="list__item" id="4">
                                <div class="list__box">
                                    <h2 class="list__text">Как разместить трек на iTunes?</h2>
                                    <button data-tab="4" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Все проекты мы размещаем на цифровых площадках в подарок.</p>
                            </li>
    
                            <li class="list__item" id="5">
                                <div class="list__box">
                                    <h2 class="list__text">Что нужно для бесплатного наброска?</h2>
                                    <button data-tab="5" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Оптимальный вариант работы над вашей песней, это работа в присутствии с аранжировщиком.</p>
                            </li>
    
                            <li class="list__item" id="6">
                                <div class="list__box">
                                    <h2 class="list__text">Какие живые инструменты используются?</h2>
                                    <button data-tab="6" class="list__title"><img src="image/icons/down-arrow.png" alt="" class=""></button>
                                </div>
                                <p class="list__descr">Акустическа гитара — Yamaha APX 700 ii
                                    Электрогитара — Fender Stratocaster (american standard)
                                    Электрогитара — Gibson Les Paul (black beauty version)
                                    Различные перкуссионные инструменты</p>
                            </li>
                        </ul>
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

        <section class="service">
            <div class="container">
                <h2 class="services__title">ЧТО ВХОДИТ В НАПИСАНИЕ АРАНЖИРОВКИ НА ЗАКАЗ?</h2>
                <div class="services">
                    <div class="services_box">
                        <ul class="services__box">
                            <li class="services__text">Бесплатный набросок</li>
                            <li class="services__text">Написание авторской аранжировки в необходимом стиле (все жанры)</li>
                            <li class="services__text">Запись живых инструментов (акустическая гитара, бас и электрогитара входят в стоимость)</li>
                            <li class="services__text">Безлимитная запись вокала (работаем на результат)</li>
                            <li class="services__text">Размещение вашего трека на всех цифровых площадках (iTunes, Яндекс Музыка, Google Play и др.)</li>
                            <li class="services__text">Все исходники (минусовка, мультитрек проекта)</li>
                        </ul>
                    </div>

                    <div class="services__item">
                        <img src="image/img/arrangement/services.png" alt="" class="services__img">
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
      