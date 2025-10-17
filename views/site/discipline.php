<h1>Список дисциплин</h1>
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
    <a href="discipline/add">Добавить</a>
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
    a[href="discipline/delete"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 6px;
    }

    p a:hover,
    a[href="discipline/delete"]:hover {
        background-color: #0056b3;
    }

    a[href="discipline/add"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px 0 20px;
    }

    a[href="discipline/add"]:hover {
        background-color: #218838;
    }

    form {
        text-align: center;
        margin: 20px auto;
        max-width: 450px;
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
        width: 140px;
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
        max-width: 850px;
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
        font-weight: bold;
    }
</style>
