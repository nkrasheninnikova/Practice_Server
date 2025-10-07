<h1>Список дисциплин</h1>
<p>
    <a href="discipline/add">Добавить</a>
</p>
<?php if (!empty($disciplines)): ?>
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
