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
                        <a href="/practice_server/student">&larr;</a>
                        <p>Добавление студента</p>
                    </div>

                    <form class="adding-student-form" method="post">
                        <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="lastname" placeholder="|Фамилия" required>
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="firstname" placeholder="|Имя" required>
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="patronymic" placeholder="|Отчество" required>
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>Пол<br>
                                <select name="gender" required>
                                    <option value="">Выберите пол</option>
                                    <option value="М">Мужской</option>
                                    <option value="Ж">Женский</option>
                                </select>
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="group_number" placeholder="|Номер группы" required>
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="date" name="birth_date" placeholder="|Дата рожджения" required>
                            </label>
                        </div>
                        <div class="adding-student-form-element">
                            <label>
                                <input type="text" name="registration_address" placeholder="|Адресс прописки" required>
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
