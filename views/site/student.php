<h1>Список студентов</h1>
<?php if (empty($students)): ?>
    <p>Нет студентов для отображения.</p>
<?php else: ?>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Пол</th>
        <th>Дата рождения</th>
        <th>Адресс прописки</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student->student_id ?></td>
            <td><?= $student->lastname ?></td>
            <td><?= $student->firstname ?></td>
            <td><?= $student->patronymic ?></td>
            <td><?= $student->gender ?></td>
            <td><?= $student->birth_date ?></td>
            <td><?= $student->registration_address ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>

