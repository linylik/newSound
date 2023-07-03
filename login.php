<!-- Авторизация -->

<?php
    session_start();
    include ("config/main.php");

$errmessage = '';
$err = '';

if(!empty($_SESSION['login'])){

    // header('Location: ./');
}

if(!empty($_POST['log'])) {

    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $query = "SELECT `id`, `login`, `password`, `email`, `role`, `telephone` FROM `users` WHERE `login`='$user' AND `password`='$pass'";
    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result)>0) {

        $result = mysqli_query($link, $query) or die (mysqli_error($link));

        while ($row = $result->fetch_assoc()) {

            $_SESSION['idUser'] = $row['id'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['telephone'] = $row['telephone'];
        }
    } else {
        $errmessage = '<p class="login__error">Логин или пароль не корректный</p>'; 
        // SOS!!!!
        
    } 
}

?>


<!-- Регистрация -->
<?php

    session_start();
    include ("config/main.php");

    $err = '';

if(!empty($_SESSION['login'])){

    // header('Location: ./');
}

// Регистрация
    if (!empty($_POST['login'])) {

        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $telephone = $_POST['telephone'];

        $loginCheck = false;

        $query = mysqli_query($link, ("SELECT *  FROM users WHERE login = '". $user . "'"));
            if($query -> num_rows > 0)
            {
                $err = '<p class="login__errmessage">Такой логин уже используется</p>';
            }
            else {
                $loginCheck = true;
            }
            
        if ($loginCheck === true) {

            mysqli_query($link, "INSERT INTO `users` (`login`, `password`, `email`, `role`, `telephone`) VALUES ('$user','$pass','$email','0','$telephone')") or die (mysqli_error($link));
        }
    }
?>

<!-- HTML code -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>Авторизация</title>
</head>
<body>
        <div class="overlay">
            <button class="overlay__btn">x</button>
    
            <section class="login login-login-form login-active">
                <img src="image/icons/user.png" class="login__icon" alt="">
                <h1 class="login__title">Авторизация</h1>
                <form class="login__form" method="POST">
                    <p class="login__text">Логин:</p>
                    <input class="login__input" id="user" type="text" name="user" required>
        
                    <p class="login__text">Пароль:</p>
                    <input class="login__input" id="pass" type="password" name="pass" required>
                    <?=$errmessage?>
        
                    <input class="login__btn-two" id="log" type="submit" name="log" value="Войти">
        
                    <button class="login__reg login-reg-btn1" type="button">Нет аккаунта? Зарегистрироваться</button>
                    </form>
            </section>
    
            <section class="login login-reg-form">
                <img src="image/icons/user.png" class="login__icon" alt="">
                <h1 class="login__title">Регистрация</h1>
                <form class="login__form" method="POST">
                    <p class="login__text">Имя</p>
                    <input class="login__input" id="user" type="text" name="user" required>
                    <?=$err?>
        
                    <p class="login__text">Телефон</p>
                    <input placeholder="+7(___) ___ __ __" class="login__input-phone" id="telephone" type="text" name="telephone" required>
    
                    <p class="login__text">Email</p>
                    <input class="login__input" id="email" type="email" name="email" required>

                    <p class="login__text">Пароль</p>
                    <input class="login__input" id="pass" type="password" name="pass" minlength="8" required>
        
                    <input class="login__btn" id="login" type="submit" name="login" value="Создать аккаунт">
                    <button class="login__reg login-reg-btn2" type="button">Уже есть аккаунт? Авторизоваться</button>
                    </form>

            </section>
        </div>
</body>
</html>
