<h1>Список студентов</h1>
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
<?php if (!empty($students)): ?>
    <form method="GET" action="/practice_server/student/edit">
        <label>
            Введите ID студента для редактирования:
            <input type="number" name="student_id" min="1" required>
        </label>
        <button type="submit">Перейти к редактированию</button>
    </form>

    <a href="student/delete">Удалить по ID</a>
<?php endif; ?>
<?php if (empty($students)): ?>
    <p>Нет студентов для отображения.</p>
<?php else: ?>
<a href="student/add">Добавить</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Пол</th>
        <th>Номер группы</th>
        <th>Дата рождения</th>
        <th>Адресс прописки</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= htmlspecialchars($student->student_id ?? '') ?></td>
            <td><?= htmlspecialchars($student->lastname ?? '') ?></td>
            <td><?= htmlspecialchars($student->firstname ?? '') ?></td>
            <td><?= htmlspecialchars($student->patronymic ?? '') ?></td>
            <td><?= htmlspecialchars($student->gender ?? '') ?></td>
            <td><?= htmlspecialchars($student->group_number ?? '') ?></td>
            <td><?= htmlspecialchars($student->birth_date ?? '') ?></td>
            <td><?= htmlspecialchars($student->registration_address ?? '') ?></td>
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
    a[href="student/delete"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 6px;
    }

    p a:hover,
    a[href="student/delete"]:hover {
        background-color: #0056b3;
    }

    a[href="student/add"] {
        display: inline-block;
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px 0 20px;
    }

    a[href="student/add"]:hover {
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

