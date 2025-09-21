<h1>Список дисциплин 1 курса</h1>
<?php if (empty($disciplines)): ?>
    <p>Нет дисциплин для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Дисциплина</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($disciplines as $discipline): ?>
            <tr>
                <td><?= $discipline->discipline_id ?></td>
                <td><?= $discipline->discipline ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<h1>Список дисциплин 2 курса</h1>
<?php if (empty($disciplines)): ?>
    <p>Нет дисциплин для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Дисциплина</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($disciplines as $discipline): ?>
            <tr>
                <td><?= $discipline->discipline_id ?></td>
                <td><?= $discipline->discipline ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<h1>Список дисциплин 3 курса</h1>
<?php if (empty($disciplines)): ?>
    <p>Нет дисциплин для отображения.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Дисциплина</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($disciplines as $discipline): ?>
            <tr>
                <td><?= $discipline->discipline_id ?></td>
                <td><?= $discipline->discipline ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
