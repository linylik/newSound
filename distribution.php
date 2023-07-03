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
    <title>Дистрибуция</title>
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
                <h3 class="header-end__title-two">Дистрибуция</h3>
                <button class="header-end__btn">Заказать</button>
            </div>
        </section>

        <section class="order">
            <div class="container">
                <h2 class="order__title">КАК ПРОДАТЬ СВОЮ МУЗЫКУ В ИНТЕРНЕТЕ?</h2>
                <p class="order__text">Раньше, только популярные артисты могли продавать свою музыку онлайн. В 2020 году мы изменили эти правила, заключив партнерские отношения с цифровыми магазинами, чтобы позволить любому музыканту продавать свои песни по всему миру, сохраняя при этом 100% своего дохода с продаж.</p>
                <p class="order__text-two">Сегодня студии звукозаписи New Sound, является партнером агрегаторов цифровой музыки по всему миру.Загрузите свою музыку, завершите оформление заказа, а мы сделаем все остальное. Ваша музыка скоро появится в цифровых магазинах, таких как Apple Music, Яндекс Музыка, Google Play, VK Boom, Spotify и др.</p>
            </div>
        </section>

        <section class="contrast">
            <div class="container">
                <h2 class="contrast__title">ЧЕМ МЫ ОТЛИЧАЕМСЯ ОТ ДРУГИХ ДИСТРИБЬЮТОРОВ?</h2>
                <hr class="contrast__des">
                <div class="contrast__two">
                    <div class="contrast__box">
                        <p class="contrast__text">Только у нас доступны все русскоязычные площадки VK music, VK Boom и Youtube Россия</p>
                        <p class="contrast__text">Почти все агрегаторы англоязычные, где сложно разобраться в условиях сотрудничества и нет онлайн поддержки</p>
                        <p class="contrast__text">Размещаем песни бессрочно, в отличии годового размещения у других агрегаторов</p>
                        <p class="contrast__text">Без комиссий, все 100% дохода с продаж ваши</p>
                        <p class="contrast__text">Подробная статистика продаж и прослушиваний по всем магазинам</p>
                    </div>
                    <div class="contrast__item">
                        <img src="image/img/mastering/image-mastering.png" alt="" class="contrast__img">
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
                                    <h2 class="list__text-two">На каких площадках будет моя музыка? </h2>
                                    <button data-tab="1" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">iTunes, Apple Music, Яндекс Музыка, Vkontakte, VkBoom, Google Play, YouTube, YouTube Россия, Shazam, Tik-Tok и др.</p>
                            </li>
    
                            <li class="list__item-two" id="2">
                                <div class="list__box">
                                    <h2 class="list__text-two">Сколько времени занимает публикация”</h2>
                                    <button data-tab="2" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">При необходимости мы можем разместить в рекордные сроки — 7 дней. Рекомендуем ставить дату релиза за 14 дней, что бы все магазины опубликовали релиз в один день.</p>
                            </li>
                        </ul>
                    </div>
    
                    <div class="list__two">
                        <ul class="list">
                            <li class="list__item-two" id="3">
                                <div class="list__box">
                                    <h2 class="list__text-two">Сколько можно заработать на продаже?</h2>
                                    <button data-tab="3" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">Ваш доход от продажи композиции зависит от типа магазина, страны совершения покупки, и от налогового законодательства той страны, в которой находится этот магазин.</p>
                            </li>
    
                            <li class="list__item-two" id="4">
                                <div class="list__box">
                                    <h2 class="list__text-two">Какие у вас финансовые взаимоотношения?</h2>
                                    <button data-tab="4" class="list__title"><img src="image/icons/right-arrow-angle.png" alt="" class="list__img"></button>
                                </div>
                                <p class="list__descr-two">Наш лейбл не получает проценты с ваших продаж, вы получаете 100% от всех полученных сборов.</p>
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
