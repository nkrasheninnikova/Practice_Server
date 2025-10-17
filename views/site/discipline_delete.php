<h1>Удалить дисциплины по ID</h1>

<form method="POST" action="/practice_server/discipline/delete">
    <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
    <label>
        ID группы:
        <input type="number" name="discipline_id" min="1" required>
    </label>
    <br><br>
    <button type="submit">Удалить</button>
    <a href="/practice_server/discipline">Назад к списку</a>
</form>