<h2>Добавление фиксации успеваемости</h2>

<form method="POST" action="">
    <label>
        Номер группы
        <input type="number" name="group_number" required>
    </label>
    <label>
        Специальность
        <input type="text" name="specialization" required>
    </label>
    <label>
        Оценка
        <input type="number" name="grade" required>
    </label>
    <label>
        Вид контроля
        <input type="text" name="type_of_control" required>
    </label>
    <button type="submit">Добавить</button>
</form>