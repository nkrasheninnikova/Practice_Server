<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление группы</title>
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
        <section class="adding-group-form-block">
            <div class="adding-group-form-center">
                <div class="adding-group-form-text">
                    <div class="adding-group-form-header">
                        <a href="group.php">&larr;</a>
                        <p>Добавление группы</p>
                    </div>

                    <form class="adding-group-form" method="post">
                        <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
                        <div class="adding-group-form-element">
                            <label>
                                <input type="text" name="group number" placeholder="|Номер группы">
                            </label>
                        </div>
                        <div class="adding-group-form-element">
                            <label>
                                <input type="text" name="specialization" placeholder="|Специальность">
                            </label>
                        </div>
                        <div class="adding-group-form-element">
                            <label>
                                <input type="text" name="year_of_admission" placeholder="|Год поступления">
                            </label>
                        </div>
                        <div class="adding-group-form-element-button">
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
