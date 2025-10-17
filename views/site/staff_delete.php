<h1>Удалить сотрудника по ID</h1>

<form method="POST" action="/practice_server/staff/delete">
    <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
    <label>
        ID сотрудника:
        <input type="number" name="staff_id" min="1" required>
    </label>
    <br><br>
    <button type="submit">Удалить</button>
    <a href="/practice_server/staff">Назад к списку</a>
</form>