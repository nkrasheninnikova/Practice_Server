<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class RoleMiddleware
{
    public function handle(Request $request, string $roles): void
    {
        $allowedRoles = explode(',', $roles);
        $user = app()->auth::user();

        // 🔐 Проверяем, авторизован ли пользователь
        if (!$user) {
            http_response_code(403);
            echo '<h1>Доступ запрещён — вы не авторизованы</h1>';
            exit();
        }

        // 🔐 Проверяем роль
        if (!in_array($user->role, $allowedRoles)) {
            http_response_code(403);
            echo '<h1>Доступ запрещён — недостаточно прав</h1>';
            exit();
        }
    }
}