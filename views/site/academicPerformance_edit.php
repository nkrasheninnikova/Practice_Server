<?php if (!isset($academicPerformance)): ?>
    <h1>Ошибка</h1>
    <p>Запись не найдена.</p>
    <a href="/academicPerformance">Вернуться к списку</a>
<?php else: ?>
    <h1>Редактировать успеваемость</h1>

    <form method="POST" action="/practice_server/academicPerformance/edit">
        <input type="hidden" name="performance_id" value="<?= htmlspecialchars($academicPerformance->performance_id) ?>">

        <label>Группа:</label>
        <input type="text" name="group_number" value="<?= htmlspecialchars($academicPerformance->group_number ?? '') ?>" required><br><br>

        <label>Фамилия:</label>
        <input type="text" name="lastname" value="<?= htmlspecialchars($academicPerformance->lastname ?? '') ?>" required><br><br>

        <label>Имя:</label>
        <input type="text" name="firstname" value="<?= htmlspecialchars($academicPerformance->firstname ?? '') ?>" required><br><br>

        <label>Отчество:</label>
        <input type="text" name="patronymic" value="<?= htmlspecialchars($academicPerformance->patronymic ?? '') ?>"><br><br>

        <label>Оценка:</label>
        <input type="text" name="grade" value="<?= htmlspecialchars($academicPerformance->grade ?? '') ?>" maxlength="10" required><br><br>

        <label>Вид контроля:</label>
        <input type="text" name="type_of_control" value="<?= htmlspecialchars($academicPerformance->type_of_control ?? '') ?>"><br><br>

        <button type="submit">Сохранить</button>
    </form>
<?php endif; ?>