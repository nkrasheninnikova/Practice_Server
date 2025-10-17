<h1>Удалить фиксации успеваемости по ID</h1>

<form method="POST" action="/practice_server/academicPerformance/delete">
    <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
    <label>
        ID группы:
        <input type="number" name="performance_id" min="1" required>
    </label>
    <br><br>
    <button type="submit">Удалить</button>
    <a href="/practice_server/academicPerformance">Назад к списку</a>
</form>