<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование сотрудника</title>
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
        <section class="edit-staff">
            <div class="edit-staff-center">
                <div class="edit-staff-header">
                    <a href="/staff">&larr; Назад к списку</a>
                    <h2>Редактирование сотрудника</h2>
                </div>

                <form method="post" action="">
                    <div class="form-group">
                        <label>Фамилия:</label>
                        <input type="text" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label>Имя:</label>
                        <input type="text" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label>Отчество:</label>
                        <input type="text" name="patronymic">
                    </div>
                    <div class="form-group">
                        <label>Дата рождения:</label>
                        <input type="date" name="birth_date">
                    </div>
                    <div class="form-group">
                        <label>Роль:</label>
                        <input type="text" name="role_staff" required>
                    </div>
                    <div class="form-group">
                        <label>Адрес прописки:</label>
                        <input type="text" name="registration_address">
                    </div>
                    <div class="form-group">
                        <label>Логин:</label>
                        <input type="text" name="login"  required>
                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="password" name="password">
                    </div>

                    <button type="submit">Сохранить</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>