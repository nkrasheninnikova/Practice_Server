<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="header">
            <div class="logo">Logo</div>
        </div>
    </header>

    <main>
        <section class="authorization-logo-block">
            <div class="authorization-logo-center">
                <div class="authorization-logo">
                    <div class="authorization-logo-color">
                        <p>Logo</p>
                    </div>
                    <p>Мой университет</p>
                </div>
                <div class="authorization-logo-text">
                    <p>Каждый день на основе<br>
                        интеграции образования, науки и<br>
                        практики</p>
                </div>
            </div>
        </section>

        <section class="authorization-form-block">
            <div class="authorization-form-center">
                <div class="authorization-form-block-text">
                    <div class="authorization-form-header">
                        <a href="index.php">&larr;</a>
                        <p>Вход в личный кабинет</p>
                    </div>

                    <form class="authorization-form" method="post">
                        <div class="authorization-form-login">
                            <label><p>Логин</p> <input type="text" name="login" placeholder="|Введите ваш логин"></label>
                        </div>
                        <div class="authorization-form-password">
                            <label><p>Пароль</p> <input type="text" name="password"  placeholder="|Введите ваш пароль" ></label>
                        </div>
                        <div class="authorization-form-button">
                            <button>Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-section">
        <div class="footer-block">
            <div class="footer-block-menu">
                <div class="footer-block-menu-text">
                    <p>Информация</p>
                    <p>Информация</p>
                    <p>Информация</p>
                </div>
                <div class="footer-block-menu-logo">Logo</div>
                <div class="footer-block-menu-icons">
                    <img src="img/icons-vk.png" alt="icons-vk">
                    <img src="img/icons-telegram.png" alt="icons-telegram">
                    <img src="img/icons-mail.png" alt="icons-mail">
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>