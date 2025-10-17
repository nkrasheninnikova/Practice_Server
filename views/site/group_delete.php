<h1>Удалить группу по ID</h1>
<link rel="stylesheet" href="css/style.css">
<form method="POST" action="/practice_server/group/delete">
    <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
    <label>
        ID группы:
        <input type="number" name="group_id" min="1" required>
    </label>
    <br><br>
    <button type="submit">Удалить</button>
    <a href="/practice_server/group">Назад к списку</a>
</form>