<h1>Список студентов</h1>
<?php if (!empty($students)): ?>
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

