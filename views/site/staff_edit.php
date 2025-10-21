<?php if (!isset($staff)): ?>
    <h1>Ошибка</h1>
    <p>Данные не загружены.</p>
    <a href="/staff">Вернуться к списку</a>
<?php else: ?>
    <h1>Редактировать сотрудника</h1>
    <form method="POST" action="/practice_server/staff/edit" enctype="multipart/form-data">
        <input type="hidden" name="staff_id" value="<?= htmlspecialchars($staff->staff_id) ?>">
        <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">

        <label>Фамилия:</label>
        <input type="text" name="lastname" value="<?= htmlspecialchars($staff->lastname ?? '') ?>" required><br><br>

        <label>Имя:</label>
        <input type="text" name="firstname" value="<?= htmlspecialchars($staff->firstname ?? '') ?>" required><br><br>

        <label>Отчество:</label>
        <input type="text" name="patronymic" value="<?= htmlspecialchars($staff->patronymic ?? '') ?>"><br><br>

        <label>Дата рождения:</label>
        <input type="date" name="birth_date" value="<?= htmlspecialchars($staff->birth_date ?? '') ?>"><br><br>

        <label>Роль сотрудника:</label>
        <input type="text" name="role_staff" value="<?= htmlspecialchars($staff->role_staff ?? '') ?>" required><br><br>

        <label>Адрес:</label>
        <input type="text" name="registration_address" value="<?= htmlspecialchars($staff->registration_address ?? '') ?>"><br><br>

        <label>Логин:</label>
        <input type="text" name="login" value="<?= htmlspecialchars($staff->login ?? '') ?>" required><br><br>

        <label>Пароль:</label>
        <input type="password" name="password" value="<?= htmlspecialchars($staff->password ?? '') ?>"><br><br>

        <button type="submit">Сохранить</button>
    </form>
<?php endif; ?>