<?php if (!isset($student)): ?>
    <h1>Ошибка</h1>
    <p>Данные не загружены.</p>
    <a href="/student">Вернуться к списку</a>
<?php else: ?>
    <h1>Редактировать группу</h1>
    <form method="POST" action="/practice_server/student/edit">
        <input type="hidden" name="student_id" value="<?= htmlspecialchars($student->student_id) ?>">

        <label>Фамилия:</label>
        <input type="text" name="lastname" value="<?= htmlspecialchars($student->lastname ?? '') ?>" required><br><br>

        <label>Имя:</label>
        <input type="text" name="firstname" value="<?= htmlspecialchars($student->firstname ?? '') ?>" required><br><br>

        <label>Отчество:</label>
        <input type="text" name="patronymic" value="<?= htmlspecialchars($student->patronymic ?? '') ?>"><br><br>

        <label>Пол:</label>
        <select name="gender" required>
            <option value="">— Выберите пол —</option>
            <option value="М" <?= (isset($student->gender) && $student->gender === 'М') ? 'selected' : '' ?>>Мужской</option>
            <option value="Ж" <?= (isset($student->gender) && $student->gender === 'Ж') ? 'selected' : '' ?>>Женский</option>
        </select><br><br>

        <label>Номер группы:</label>
        <input type="text" name="group_number" value="<?= htmlspecialchars($student->group_number ?? '') ?>"><br><br>

        <label>Дата рождения:</label>
        <input type="date" name="birth_date" value="<?= htmlspecialchars($student->birth_date ?? '') ?>"><br><br>

        <label>Адрес прописки:</label>
        <input type="text" name="registration_address" value="<?= htmlspecialchars($student->registration_address ?? '') ?>"><br><br>

        <button type="submit">Сохранить</button>
    </form>
<?php endif; ?>