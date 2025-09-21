<h1>Список групп 1 курса</h1>
<?php if (empty($groups)): ?>
    <p>Нет групп для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>№Группы</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?= $group->group_id ?></td>
                <td><?= $group->group_number ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<h1>Список групп 2 курса</h1>
<?php if (empty($groups)): ?>
    <p>Нет групп для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>№Группы</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?= $group->group_id ?></td>
                <td><?= $group->group_number ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<h1>Список групп 3 курса</h1>
<?php if (empty($groups)): ?>
    <p>Нет групп для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>№Группы</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?= $group->group_id ?></td>
                <td><?= $group->group_number ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>