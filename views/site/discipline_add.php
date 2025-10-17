<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление дисциплины</title>
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
        <section class="adding-discipline-form-block">
            <div class="adding-discipline-form-center">
                <div class="adding-discipline-form-text">
                    <div class="adding-discipline-form-header">
                        <a href="discipline.php">&larr;</a>
                        <p>Добавление дисциплины</p>
                    </div>
                    <form class="adding-discipline-form" method="post">
                        <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
                        <div class="adding-discipline-form-element">
                            <label>
                                <input type="text" name="group_number" placeholder="|Номер группы">
                            </label>
                        </div>
                        <div class="adding-discipline-form-element">
                            <label>
                                <input type="text" name="specialization" placeholder="|Специальность">
                            </label>
                        </div>
                        <div class="adding-discipline-form-element">
                            <label>
                                <input type="text" name="discipline" placeholder="|Дисциплина">
                            </label>
                        </div>
                        <div class="adding-discipline-form-element">
                            <label>
                                <input type="text" name="total_number_of_hours" placeholder="|Общее количество часов">
                            </label>
                        </div>
                        <div class="adding-discipline-form-element-button">
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
