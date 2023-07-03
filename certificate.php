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
    <title>Подарочный сертификат</title>
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
                <h3 class="header-end__title-two">Подарочный сертификат</h3>
                <button class="header-end__btn">Заказать</button>
            </div>
        </section>

        <section class="order">
            <div class="container">
                <h2 class="order__title">КОМУ НУЖНО ПОДАРИТЬ СЕРТИФИКАТ НА ЗАПИСЬ ПЕСНИ В NEW SOUND?</h2>
                <p class="order__text">Подарочный сертификат в студию звукозаписи можно подарить любому – взрослому, ребенку, вокалисту с опытом и даже тому, кто еще не имеет опыта исполнения песен.</p>
                <p class="order__text-two">Современные технологии позволяют «вытягивать» и исправлять практически любые ошибки исполнения. Наши вежливые и тактичные звукорежиссёры помогут чувствовать себя комфортно во время записи песни независимо от опыта и вокальных данных. Мы поможем освоиться, запишем композицию, при необходимости сделаем аранжировку</p>
            </div>
        </section>

        <section class="for-whom-certificate">
            <div class="container">
                <h2 class="for-whom-certificate__title">КОМУ НУЖНО ПОДАРИТЬ СЕРТИФИКАТ НА ЗАПИСЬ ПЕСНИ В NEW SOUND?</h2>
                <div class="for-whom-certificate__two">
                    <div class="for-whom-certificate__item">
                        <img src="image/img/certificate/certificate.png" alt="" class="for-whom-certificate__image">
                    </div>

                    <div class="for-whom-certificate__box">
                        <div class="for-whom-certificate__boxing">
                            <img src="image/icons/certificate/des.png" alt="des" class="for-whom-certificate__img">
                            <p class="for-whom-certificate__text">Запись песни в профессиональной студии</p>
                        </div>

                        <div class="for-whom-certificate__boxing">
                            <img src="image/icons/certificate/des.png" alt="des" class="for-whom-certificate__img">
                            <p class="for-whom-certificate__text">Работа с опытным звукорежиссером</p>
                        </div>

                        <div class="for-whom-certificate__boxing">
                            <img src="image/icons/certificate/des.png" alt="des" class="for-whom-certificate__img">
                            <p class="for-whom-certificate__text">Уникальная обработка вокала (правка неточных нот)</p>
                        </div>

                        <div class="for-whom-certificate__boxing">
                            <img src="image/icons/certificate/des.png" alt="des" class="for-whom-certificate__img">
                            <p class="for-whom-certificate__text">Готовая песня за 3-5 дней</p>
                        </div>  
                        
                        <div class="for-whom-certificate__boxing">
                            <img src="image/icons/certificate/des.png" alt="des" class="for-whom-certificate__img">
                            <p class="for-whom-certificate__text">Срок действия 6 месяцев</p>
                        </div>  
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

        <section class="reviews">
            <div class="container">
                <h2 class="reviews__title">ОТЗЫВЫ ОБЛАДЕТЕЛЕЙ СЕРТИФИКАТА</h2>
                <div class="reviews__box">
                    <div class="reviews__item">
                        <h1 class="reviews__box-title">Анна</h1>
                        <img src="image/img/certificate/reviews.png" alt="reviews" class="reviews__img">
                        <p class="reviews__text">Я очень благодарна команде студии и рада, что моя первая песня и видеоклип были записаны именно в New Sound! Я очень переживала за процесс, так как опыта записи в студии у меня не было. Я была приятна удивлена, что студии бывают такие уютные и с приятной творческой атмосферой!</p>
                    </div>

                    <div class="reviews__item">
                        <h1 class="reviews__box-title">Анна</h1>
                        <img src="image/img/certificate/reviews.png" alt="reviews" class="reviews__img">
                        <p class="reviews__text">Покупала сертификат на запись песни в подарок молодому человеку. Он был безумно рад, сказал, что это лучший подарок - впечатление, который он мог ожидать. Студия и ребята — просто топ. Помогли справится с волнением и поверить в себя. </p>
                    </div>

                    <div class="reviews__item">
                        <h1 class="reviews__box-title">Анна</h1>
                        <img src="image/img/certificate/reviews.png" alt="reviews" class="reviews__img">
                        <p class="reviews__text">Записывали с подругами песню по подарочному сертификату. Спасибо огромное звукорежиссёру Алексею за терпение и помощь на записи. С нами было точно непросто, так как мы совсем не вокалистки, но с профессионалом было очень комфортно, мы не чувствовали себя бездарями.</p>
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


