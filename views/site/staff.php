<h1>Список сотрудников</h1>

<p>
    <a href="staff/add">Добавить</a>
</p>
<?php if (!empty($staffs)): ?>
    <a href="staff/delete">Удалить по ID</a>
<?php endif; ?>

<?php if (empty($staffs)): ?>
    <p>Нет сотрудников для отображения.</p>
<?php else: ?>
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