<h1>Удалить студента по ID</h1>

<form method="POST" action="/practice_server/student/delete">
    <input type="hidden" name="csrf_token" value="<?= \Src\Auth\Auth::generateCSRF() ?>">
    <label>
        ID студента:
        <input type="number" name="student_id" min="1" required>
    </label>
    <br><br>
    <button type="submit">Удалить</button>
    <a href="/practice_server/student">Назад к списку</a>
</form>