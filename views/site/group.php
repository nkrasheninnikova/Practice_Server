<h1>Список групп</h1>
<form method="GET" action="">
    <?php
    $searchName = 'group_number';
    $placeholder = 'Поиск группы...';
    include __DIR__ . '/../../vendor/nkrasheninnikova/mycollect/src/search-form.php'; ?>
    <?php if (!empty($_GET['group_number'])): ?>
        <a href="?">Сбросить</a>
    <?php endif; ?>
</form>

<?php if (!empty($groups)): ?>
    <form method="GET" action="/practice_server/group/edit">
        <label>
            Введите ID группы для редактирования:
            <input type="number" name="group_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
    </form>

    <a href="group/delete">Удалить по ID</a>
    <a href="group/add">Добавить</a>
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
    a[href="group/delete"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 6px;
    }

    p a:hover,
    a[href="group/delete"]:hover {
        background-color: #0056b3;
    }

    a[href="group/add"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px 0 20px;
    }

    a[href="group/add"]:hover {
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

