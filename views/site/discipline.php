<h1>Список дисциплин</h1>
<p>
    <a href="discipline/add">Добавить</a>
</p>
<?php if (empty($disciplines)): ?>
    <p>Нет дисциплин для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Дисциплина</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($disciplines as $discipline): ?>
            <tr>
                <td><?= htmlspecialchars($discipline->discipline_id) ?></td>
                <td><?= htmlspecialchars($discipline->discipline) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
