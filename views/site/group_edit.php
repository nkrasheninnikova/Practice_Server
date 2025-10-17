<?php if (!isset($group)): ?>
    <h1>Ошибка</h1>
    <p>Данные не загружены.</p>
    <a href="/group">Вернуться к списку</a>
<?php else: ?>
    <h1>Редактировать группу</h1>
    <form method="POST" action="/practice_server/group/edit">
        <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
        <input type="hidden" name="group_id" value="<?= htmlspecialchars($group->group_id) ?>">

        <label>Номер группы:</label>
        <input type="text" name="group_number" value="<?= htmlspecialchars($group->group_number) ?>">

        <label>Специальность:</label>
        <input type="text" name="specialization" value="<?= htmlspecialchars($group->specialization) ?>">

        <label>Год поступления:</label>
        <input type="number" name="year_of_admission" value="<?= (int)$group->year_of_admission ?>" min="0" required>

        <button type="submit">Сохранить</button>
    </form>
<?php endif; ?>