<h2>Добавление Дисциплины</h2>

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
        Дисциплина
        <input type="text" name="discipline" required>
    </label>
    <label>
        Общее количество часов
        <input type="number" name="total_number_of_hours" required>
    </label>
    <button type="submit">Добавить</button>
</form>