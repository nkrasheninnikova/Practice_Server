<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<div class="wrapper">
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
                        <a href="<?= app()->route->getUrl('/hello') ?>">&larr;</a>
                        <p>Вход в личный кабинет</p>
                    </div>
                    <?php if (!empty($message)): ?>
                        <div class="auth-message error">
                            <?= htmlspecialchars($message) ?>
                        </div>
                    <?php elseif (app()->auth::check()): ?>
                        <div class="auth-message success">
                            Вы вошли как: <strong><?= htmlspecialchars(app()->auth::user()->name ?? '') ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if (!app()->auth::check()): ?>
                        <form class="authorization-form" method="post">
                            <!-- CSRF-защита -->
                            <input type="hidden" name="csrf_token" value="<?= app()->auth::generateCSRF() ?>">

                            <div class="authorization-form-login">
                                <label>
                                    <p>Логин</p>
                                    <input type="text" name="login" placeholder="|Введите ваш логин" required>
                                </label>
                            </div>
                            <div class="authorization-form-password">
                                <label>
                                    <p>Пароль</p>
                                    <input type="password" name="password" placeholder="|Введите ваш пароль" required>
                                </label>
                            </div>
                            <div class="authorization-form-button">
                                <button type="submit">Войти</button>
                            </div>
                        </form>
                    <?php else: ?>
                        <div class="auth-logout">
                            <a href="<?= app()->route->getUrl('/logout') ?>">Выйти из аккаунта</a>
                        </div>
                    <?php endif; ?>
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
                    <img src="img/icons-vk.png" alt="ВКонтакте">
                    <img src="img/icons-telegram.png" alt="Telegram">
                    <img src="img/icons-mail.png" alt="Email">
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>