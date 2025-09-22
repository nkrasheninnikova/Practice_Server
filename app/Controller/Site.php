<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function student (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.student');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.student', ['message' => 'аааа']);
    }

    public function academicPerformance (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.academicperformance');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.academicperformance', ['message' => 'аааа']);
    }
    public function group (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.group');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.group', ['message' => 'аааа']);
    }
    public function discipline (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.discipline');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.discipline', ['message' => 'аааа']);
    }
    public function student_add(Request $request): string
    {
        // Если GET — просто показываем форму
        if ($request->method === 'GET') {
            return new View('site.student_add');
        }

        // Если POST — обрабатываем данные
        if ($request->method === 'POST') {
            return new View('site.student_add');
        }
        // На всякий случай — если ни GET, ни POST
        return new View('site.add_student');
    }
}
