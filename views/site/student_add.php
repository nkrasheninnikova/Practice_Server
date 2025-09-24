<h2>Добавление студента</h2>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление студента</title>
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
        <section class="adding-student-form-block">
            <div class="adding-student-form-center">
                <div class="adding-student-form-text">
                    <div class="adding-student-form-header">
                        <a href="student.php">&larr;</a>
                        <p>Добавление студента</p>
                    </div>

                    <form class="adding-student-form" method="post">
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="surname" placeholder="|Фамилия">
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="name" placeholder="|Имя">
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="patronymic" placeholder="|Отчество">
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="gender" placeholder="|Пол">
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="group number" placeholder="|Номер группы">
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="date of birth" placeholder="|Дата рожджения">
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="registration address" placeholder="|Адресс прописки">
                            </label>
                        </div>
                        <div class="adding-student-form-element-button">
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
