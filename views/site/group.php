<h1>Список групп</h1>

<p>
    <a href="group/add">Добавить</a>
</p>
<?php if (!empty($groups)): ?>
    <form method="GET" action="/practice_server/group/edit">
        <label>
            Введите ID группы для редактирования:
            <input type="number" name="group_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
    </form>

    <a href="group/delete">Удалить по ID</a>
<?php endif; ?>

<?php if (empty($groups)): ?>
    <p>Нет групп для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>№ Группы</th>
            <th>Специальность</th>
            <th>Год поступления</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?= htmlspecialchars($group->group_id) ?></td>
                <td><?= htmlspecialchars($group->group_number) ?></td>
                <td><?= htmlspecialchars($group->specialization) ?></td>
                <td><?= htmlspecialchars($group->year_of_admission) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
