<h1>Список дисциплин</h1>

<p>
    <a href="discipline/add">Добавить</a>
</p>

<?php if (!empty($disciplines)): ?>
    <form method="GET" action="/practice_server/discipline/edit">
        <label>
            Введите ID дисциплины для редактирования:
            <input type="number" name="discipline_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
    </form>

    <a href="discipline/delete">Удалить по ID</a>
<?php endif; ?>

<?php if (empty($disciplines)): ?>
    <p>Нет дисциплин для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Номер группы</th>
            <th>Специальность</th>
            <th>Дисциплина</th>
            <th>Общее количество часов</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($disciplines as $discipline): ?>
            <tr>
                <td><?= htmlspecialchars($discipline->disciplines_id) ?></td>
                <td><?= htmlspecialchars($discipline->group_number) ?></td>
                <td><?= htmlspecialchars($discipline->specialization) ?></td>
                <td><?= htmlspecialchars($discipline->discipline) ?></td>
                <td><?= htmlspecialchars($discipline->total_number_of_hours) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>