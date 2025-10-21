<h1>Список сотрудников</h1>

<form method="GET" action="">
    <label>
        Поиск по фамилии:
        <input type="text" name="lastname" value="<?= htmlspecialchars($_GET['lastname'] ?? '') ?>"
               placeholder="Поиск по фамилии">
    </label>
    <button type="submit">Найти</button>
    <?php if (!empty($_GET['lastname'])): ?>
        <a href="?">Сбросить</a>
    <?php endif; ?>
</form>

<?php if (!empty($staffs)): ?>
    <form method="GET" action="/practice_server/staff/edit">
        <label>
            Введите ID сотрудника для редактирования:
            <input type="number" name="staff_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
    </form>

    <a href="staff/delete">Удалить по ID</a>
<?php endif; ?>
<?php if (empty($staffs)): ?>
    <p>Нет сотрудников для отображения.</p>
<?php else: ?>
    <a href="staff/add">Добавить</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Дата рождения</th>
            <th>Роль сотрудника</th>
            <th>Адрес прописки</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($staffs as $staff): ?>
            <tr>
                <td><?= htmlspecialchars($staff->staff_id ?? '') ?></td>
                <td><?= htmlspecialchars($staff->lastname ?? '') ?></td>
                <td><?= htmlspecialchars($staff->firstname ?? '') ?></td>
                <td><?= htmlspecialchars($staff->patronymic ?? '') ?></td>
                <td><?= htmlspecialchars($staff->birth_date ?? '') ?></td>
                <td><?= htmlspecialchars($staff->role_staff ?? '') ?></td>
                <td><?= htmlspecialchars($staff->registration_address ?? '') ?></td>
                <td><?= htmlspecialchars($staff->login ?? '') ?></td>
                <td><?= htmlspecialchars($staff->password ?? '') ?></td>
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
    a[href="staff/delete"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 6px;
    }

    p a:hover,
    a[href="staff/delete"]:hover {
        background-color: #0056b3;
    }

    a[href="staff/add"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px 0 20px;
    }

    a[href="staff/add"]:hover {
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

