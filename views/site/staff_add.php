<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление сотрудника</title>
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
        <section class="adding-form-block">
            <div class="adding-form-center">
                <div class="adding-form-block-text">
                    <div class="adding-form-header">
                        <a href="">&larr;</a>
                        <p>Добавление сотрудника</p>
                    </div>

                    <form class="adding-form" method="post">
                        <div class="adding-form-element">
                            <label>
                                <input type="text" name="lastname" placeholder="|Фамилия">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="text" name="firstname" placeholder="|Имя">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="text" name="patronymic" placeholder="|Отчество">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="date" name="birth_date" placeholder="|Дата рожджения">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="text" name="role_staff" placeholder="|Роль сотрудника">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="text" name="registration_address" placeholder="|Адресс прописки">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="text" name="login" placeholder="|Логин">
                            </label>
                        </div>
                        <div class="adding-form-element">
                            <label>
                                <input type="password" name="password" placeholder="|Пароль">
                            </label>
                        </div>
                        <div class="adding-form-element-button">
                            <button type="submit">Добавить</button>
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

