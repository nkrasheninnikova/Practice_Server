<h1>Фиксация успеваемости студентов</h1>
<?php if (empty($students)): ?>
    <p>Нет студентов для отображения.</p>
<?php else: ?>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Номер группы</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Оценка</th>
        <th>Вид контроля</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student->student_id ?></td>
            <td><?= $student->group_number ?></td>
            <td><?= $student->lastname ?></td>
            <td><?= $student->firstname ?></td>
            <td><?= $student->patronymic ?></td>
            <td><?= $student->grade ?></td>
            <td><?= $student->assessment_type ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
