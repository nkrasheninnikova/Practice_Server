<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление фиксации успеваемости</title>
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
        <section class="adding-of-academic-perfomance">
            <div class="adding-of-academic-performance-center">
                <div class="adding-of-academic-performance-text">
                    <div class="adding-of-academic-performance-header">
                        <a href="academicPerformance.php">&larr;</a>
                        <p>Фиксация успеваемости</p>
                    </div>

                    <form class="adding-of-academic-performance-form" method="post">
                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="group_number" placeholder="|Номер группы">
                            </label>
                        </div>

                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="lastname" placeholder="|Фамилия">
                            </label>
                        </div>

                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="firstname" placeholder="|Имя">
                            </label>
                        </div>

                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="patronymic" placeholder="|Отчество">
                            </label>
                        </div>
                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="specialization" placeholder="|Специальность">
                            </label>
                        </div>
                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="discipline" placeholder="|Дисциплина">
                            </label>
                        </div>
                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="grade" placeholder="|Оценка">
                            </label>
                        </div>
                        <div class="adding-of-academic-perfomance-element">
                            <label>
                                <input type="text" name="type_of_control" placeholder="|Вид контроля">
                            </label>
                        </div>
                        <div class="adding-of-academic-perfomance-element-button">
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

