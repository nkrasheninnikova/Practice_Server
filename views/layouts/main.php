<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="logo-menu">
            <!-- Логотип -->
            <div class="logo">Logo</div>
            <div class="nav-and-account">
                <?php if (app()->auth::check()): ?>
                    <?php $user = app()->auth::user(); ?>
                    <nav class="role-nav">
                        <?php if ($user->isStaff()): ?>
                            <a href="<?= app()->route->getUrl('/group') ?>">Группы</a>
                            <a href="<?= app()->route->getUrl('/student') ?>">Студенты</a>
                            <a href="<?= app()->route->getUrl('/discipline') ?>">Дисциплины</a>
                            <a href="<?= app()->route->getUrl('/academicPerformance') ?>">Фиксация успеваемости студентов</a>
                        <?php elseif ($user->isAdmin()): ?>
                            <a href="<?= app()->route->getUrl('/staff') ?>">Сотрудники</a>
                            <a href="<?= app()->route->getUrl('/discipline') ?>">Дисциплины</a>
                        <?php endif; ?>
                    </nav>
                <?php endif; ?>

                <div class="account">
                    <?php if (!app()->auth::check()): ?>
                        <a href="<?= app()->route->getUrl('/login') ?>">Вход в личный кабинет</a>
                    <?php else: ?>
                        <a href="<?= app()->route->getUrl('/logout') ?>">
                            Выход (<?= htmlspecialchars($user->name ?? '') ?>)
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?= $content ?? '' ?>
    </main>
</div>
</body>
</html>