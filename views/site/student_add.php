<h2>Добавление студента</h2>

<form method="POST" action="">
    <label>
        Фамилия
        <input type="text" name="lastname" required>
    </label>
    <label>
        Имя
        <input type="text" name="firstname" required>
    </label>
    <label>
        Отчество
        <input type="text" name="patronymic" required>
    </label>
    <label>
        Номер группы
        <input type="number" name="group_number" required>
    </label>
    <label>
        Дата рождения
        <input type="date" name="birth_date" required>
    </label>
    <label>
        Адресс прописки
        <input type="text" name="registration_address" required>
    </label>
    <button type="submit">Добавить</button>
</form>