<h1>Фиксация успеваемости студентов</h1>
<form method="GET" action="">
    <label>
        Поиск группы:
        <input type="text" name="group_number" value="<?= htmlspecialchars($_GET['group_number'] ?? '') ?>"
               placeholder="Поиск группы">
    </label>
    <button type="submit">Найти</button>
    <?php if (!empty($_GET['group_number'])): ?>
        <a href="?">Сбросить</a>
    <?php endif; ?>
</form>
<link rel="stylesheet" href="css/style.css">
<?php if (!empty($academicPerformances)): ?>
    <form method="GET" action="/practice_server/academicPerformance/edit">
        <label>
            Введите ID успеваемости для редактирования:
            <input type="number" name="performance_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
    </form>

    <a href="academicPerformance/delete">Удалить по ID</a>
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
<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    p {
        text-align: center;
        margin: 15px 0;
    }

    p a,
    a[href="academicPerformance/delete"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 6px;
    }

    p a:hover,
    a[href="academicPerformance/delete"]:hover {
        background-color: #0056b3;
    }

    a[href="academicPerformance/add"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px 0 20px;
    }

    a[href="academicPerformance/add"]:hover {
        background-color: #218838;
    }

    form {
        text-align: center;
        margin: 20px auto;
        max-width: 400px;
    }

    form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #444;
    }

    form input[type="number"] {
        padding: 6px;
        font-size: 16px;
        width: 120px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    form button {
        margin-top: 10px;
        padding: 6px 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    form button:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        max-width: 900px;
        margin: 20px auto;
        border-collapse: collapse;
        font-size: 15px;
        background: white;
        border-radius: 6px;
        overflow: hidden;
    }

    table th,
    table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #f8f9fa;
        color: #333;
    }
</style>
