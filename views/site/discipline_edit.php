<?php if (!isset($discipline)): ?>
    <h1>Ошибка</h1>
    <p>Данные не загружены.</p>
    <a href="/discipline">Вернуться к списку</a>
<?php else: ?>
    <h1>Редактировать дисциплину</h1>
    <form method="POST" action="/practice_server/discipline/edit">
        <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
        <input type="hidden" name="discipline_id" value="<?= htmlspecialchars($discipline->disciplines_id) ?>">

        <label>Название дисциплины:</label>
        <input type="text" name="discipline" value="<?= htmlspecialchars($discipline->discipline) ?>" required>

        <label>Номер группы:</label>
        <input type="text" name="group_number" value="<?= htmlspecialchars($discipline->group_number) ?>">

        <label>Специальность:</label>
        <input type="text" name="specialization" value="<?= htmlspecialchars($discipline->specialization) ?>">

        <label>Общее количество часов:</label>
        <input type="number" name="total_number_of_hours" value="<?= (int)$discipline->total_number_of_hours ?>" min="0" required>

        <button type="submit">Сохранить</button>
    </form>
<?php endif; ?>