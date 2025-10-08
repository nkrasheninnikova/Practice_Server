<h1>Фиксация успеваемости студентов</h1>
<?php if (!empty($academicPerformances)): ?>
    <form method="GET" action="/practice_server/academicPerformance/edit">
        <label>
            Введите ID успеваемости для редактирования:
            <input type="number" name="performance_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
        <a href="academicPerformance/delete">Удалить по ID</a>
    </form>
<?php endif; ?>
<?php if (empty($academicPerformances)): ?>
    <p>Нет данных для отображения.</p>
<?php else: ?>
<a href="academicPerformance/add">Добавить</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Группа</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Оценка</th>
            <th>Вид контроля</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($academicPerformances as $ap): ?>
            <tr>
                <td><?= htmlspecialchars($ap['performance_id'] ?? '') ?></td>
                <td><?= htmlspecialchars($ap['group_number'] ?? '') ?></td>
                <td><?= htmlspecialchars($ap['lastname'] ?? '') ?></td>
                <td><?= htmlspecialchars($ap['firstname'] ?? '') ?></td>
                <td><?= htmlspecialchars($ap['patronymic'] ?? '') ?></td>
                <td><?= htmlspecialchars($ap['grade'] ?? '') ?></td>
                <td><?= htmlspecialchars($ap['type_of_control'] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>