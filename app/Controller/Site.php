<?php

namespace Controller;

use Illuminate\Database\Eloquent\Model;
use Model\Post;
use Model\Students;
use Model\Group;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Disciplines;
use Model\Academicperformance;

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

    public function student(Request $request): string
    {
        if ($request->method !== 'GET') {
            return new View('site.student');
        }

        $students = Students::all();

        return (new View())->render('site.student', [
            'students' => $students
        ]);
    }

    public function academicPerformance (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method !== 'GET') {
            return new View('site.academicPerformance');
        }
        $academicPerformances = academicPerformance::all();

            return (new View())->render('site.academicPerformance', [
                'academicPerformances' => $academicPerformances
            ]);
    }
    public function group (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method !== 'GET') {
            return new View('site.group');
        }
        // Загружаем все группы
        $groups = Group::all();

        // Передаём в шаблон как одну переменную
        return (new View())->render('site.group', [
            'groups' => $groups
        ]);
    }
    public function discipline (Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method !== 'GET') {
            return new View('site.discipline');
        }
            // Загружаем все дисциплины из БД
            $disciplines = Disciplines::all();

        return (new View())->render('site.discipline', ['disciplines' => $disciplines]);
    }
    public function student_add(Request $request): string
    {
        if ($request->method === 'POST') {
            $data = $request->all();
            \Model\Students::create($data);

            app()->route->redirect('/student');
            exit;
        }

        return (new View())->render('site.student_add');
    }
    public function group_add(Request $request): string
    {
        if ($request->method === 'POST') {
            $data = $request->all();
            // Просто сохраняем в БД
            \Model\Group::create($data);

            // Редиректим на список групп
            app()->route->redirect('/group');
            exit;
        }
        return (new View())->render('site.group_add');
    }
    public function discipline_add(Request $request): string
    {
        if ($request->method === 'POST') {
            $data = $request->all();

            // Сохраняем новую дисциплину в БД
            \Model\Disciplines::create($data);

            // Редиректим на список дисциплин
            app()->route->redirect('/discipline');
            exit;
        }

        // При GET — показываем форму добавления
        return (new View())->render('site.discipline_add');
    }
    public function academicPerformance_add(Request $request): string
    {
        if ($request->method === 'POST') {
            $data = $request->all();

            // Сохраняем в БД
            \Model\AcademicPerformance::create($data);

            // Редиректим на список
            app()->route->redirect('/academicPerformance');
            exit;
        }

        // При GET — показываем форму
        return (new View())->render('site.academicPerformance_add');
    }
    public function staff_add(Request $request): string
    {
        // Если GET — просто показываем форму
        if ($request->method === 'GET') {
            return new View('site.staff_add');
        }

        // Если POST — обрабатываем данные
        if ($request->method === 'POST') {
            return new View('site.staff_add');
        }
        // На всякий случай — если ни GET, ни POST
        return new View('site.staff_add');
    }
}
