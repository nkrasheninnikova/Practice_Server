<?php

namespace Controller;

use Illuminate\Database\Eloquent\Model;
use Model\Post;
use Model\Staff;
use Model\Students;
use Model\Group;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Disciplines;
use Model\Academicperformance;
use Src\Validator\Validator;


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
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
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
            app()->route->redirect('/hello ');
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
            return (new View())->render('site.student', ['students' => []]);
        }

        // Получаем фамилию из GET-параметра
        $lastname = $_GET['lastname'] ?? '';
        $lastname = trim($lastname);

        // Загружаем студентов: всех или по фамилии
        if ($lastname !== '') {
            $students = Students::where('lastname', 'LIKE', "%{$lastname}%")->get();
        } else {
            $students = Students::all();
        }

        return (new View())->render('site.student', [
            'students' => $students,
            'request' => $request
        ]);
    }

    public function academicPerformance(Request $request): string
    {
        if ($request->method !== 'GET') {
            return (new View())->render('site.academicPerformance', [
                'academicPerformances' => []
            ]);
        }

        // Получаем номер группы из GET-параметра
        $groupNumber = $_GET['group_number'] ?? '';
        $groupNumber = trim($groupNumber);

        // Загружаем успеваемость: все записи или только по группе
        if ($groupNumber !== '') {
            $academicPerformances = AcademicPerformance::where('group_number', 'LIKE', "%{$groupNumber}%")->get();
        } else {
            $academicPerformances = AcademicPerformance::all();
        }

        return (new View())->render('site.academicPerformance', [
            'academicPerformances' => $academicPerformances,
            'request' => $request
        ]);
    }
    public function group(Request $request): string
    {
        if ($request->method !== 'GET') {
            return (new View())->render('site.group', ['groups' => []]);
        }

        // Получаем название/номер группы из GET-параметра
        $groupQuery = $_GET['group_number'] ?? '';
        $groupQuery = trim($groupQuery);

        // Загружаем группы: все или по частичному совпадению
        if ($groupQuery !== '') {
            $groups = Group::where('group_number', 'LIKE', "%{$groupQuery}%")->get();
        } else {
            $groups = Group::all();
        }

        return (new View())->render('site.group', [
            'groups' => $groups,
            'request' => $request
        ]);
    }
    public function discipline(Request $request): string
    {
        if ($request->method !== 'GET') {
            return (new View())->render('site.discipline', ['disciplines' => []]);
        }

        // Получаем название дисциплины из GET-параметра
        $search = $_GET['discipline'] ?? '';
        $search = trim($search);

        // Загружаем дисциплины: все или по частичному совпадению
        if ($search !== '') {
            $disciplines = Disciplines::where('discipline', 'LIKE', "%{$search}%")->get();
        } else {
            $disciplines = Disciplines::all();
        }

        return (new View())->render('site.discipline', [
            'disciplines' => $disciplines,
            'request' => $request
        ]);
    }
    public function staff(Request $request): string
    {
        // Разрешаем только GET-запросы
        if ($request->method !== 'GET') {
            return (new View())->render('site.staff', ['staffs' => []]);
        }

        // Получаем фамилию из глобального массива $_GET
        $lastname = $_GET['lastname'] ?? '';

        // Убираем лишние пробелы и проверяем, не пустая ли строка
        $lastname = trim($lastname);

        // Загружаем сотрудников
        if ($lastname !== '') {
            $staffs = Staff::where('lastname', 'LIKE', "%{$lastname}%")->get();
        } else {
            $staffs = Staff::all();
        }

        return (new View())->render('site.staff', [
            'staffs' => $staffs,
            'request' => $request
        ]);
    }

    public function student_add(Request $request): string
    {
        if ($request->method === 'POST') {
            $data = $request->all();

            \Model\Students::create([
                'lastname' => trim($data['lastname']),
                'firstname' => trim($data['firstname']),
                'patronymic' => trim($data['patronymic']) ?: null,
                'gender' => $data['gender'],
                'birth_date' => $data['birth_date'] ?: null,
                'registration_address' => $data['registration_address'] ?: null,
                'course_number' => $data['course_number'] ?: null,
                'group_id' => $data['group_id'],
                'group_number' => $data['group_number'] ?: null,
            ]);

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
        if ($request->method === 'POST') {
            $data = $request->all();

            // Сохраняем новую дисциплину в БД
            \Model\Staff::create($data);

            // Редиректим на список дисциплин
            app()->route->redirect('/staff');
            exit;
        }
        // На всякий случай — если ни GET, ни POST
        return new View('site.staff_add');
    }

    public function student_delete(Request $request): string
    {
        // GET — показываем форму удаления
        if ($request->method !== 'POST') {
            return (new View())->render('site.student_delete');
        }

        // POST — обрабатываем удаление
        $id = (int)($_POST['student_id'] ?? 0);

        if ($id > 0) {
            $student = \Model\Students::find($id);
            $student?->delete();
        }

        app()->route->redirect('/student');
        exit;
    }

    public function staff_delete(Request $request): string
    {
        // GET — показываем форму удаления
        if ($request->method !== 'POST') {
            return (new View())->render('site.staff_delete');
        }

        // POST — обрабатываем удаление
        $id = (int)($_POST['staff_id'] ?? 0);

        if ($id > 0) {
            $staff = \Model\Staff::find($id);
            $staff?->delete();
        }
        app()->route->redirect('/staff');
        exit;
    }

    public function group_delete(Request $request): string
    {
        // GET — показываем форму удаления
        if ($request->method !== 'POST') {
            return (new View())->render('site.group_delete');
        }

        // POST — обрабатываем удаление
        $id = (int)($_POST['group_id'] ?? 0);

        if ($id > 0) {
            $group = \Model\Group::find($id);
            $group?->delete();
        }

        app()->route->redirect('/group');
        exit;
    }

    public function discipline_delete(Request $request): string
    {
        // GET — показываем форму удаления
        if ($request->method !== 'POST') {
            return (new View())->render('site.discipline_delete');
        }

        // POST — обрабатываем удаление
        $id = (int)($_POST['discipline_id'] ?? 0);

        if ($id > 0) {
            $discipline = \Model\Disciplines::find($id);
            $discipline?->delete();
        }

        app()->route->redirect('/discipline');
        exit;
    }

    public function academicPerformance_delete(Request $request): string
    {
        // GET — показываем форму удаления
        if ($request->method !== 'POST') {
            return (new View())->render('site.academicPerformance_delete');
        }

        // POST — обрабатываем удаление
        $id = (int)($_POST['performance_id'] ?? 0);

        if ($id > 0) {
            $discipline = \Model\Academicperformance::find($id);
            $discipline?->delete();
        }

        app()->route->redirect('/academicPerformance');
        exit;
    }

    public function discipline_edit(Request $request): string
    {
        // GET — показываем форму редактирования
        if ($request->method !== 'POST') {
            $id = (int)($_GET['discipline_id'] ?? 0);
            if ($id <= 0) {
                app()->route->redirect('/discipline');
                exit;
            }

            $discipline = \Model\Disciplines::find($id);
            if (!$discipline) {
                app()->route->redirect('/discipline');
                exit;
            }

            return (new View())->render('site.discipline_edit', [
                'discipline' => $discipline
            ]);
        }

        // POST — обновляем данные
        $id = (int)($_POST['discipline_id'] ?? 0);
        if ($id > 0) {
            $discipline = \Model\Disciplines::find($id);
            if ($discipline) {
                $discipline->discipline = $_POST['discipline'] ?? '';
                $discipline->group_number = $_POST['group_number'] ?? '';
                $discipline->specialization = $_POST['specialization'] ?? '';
                $discipline->total_number_of_hours = (int)($_POST['total_number_of_hours'] ?? 0);
                $discipline->save();
            }
        }

        app()->route->redirect('/discipline');
        exit;
    }

    public function academicPerformance_edit(Request $request): string
    {
        // GET — показываем форму редактирования
        if ($request->method !== 'POST') {
            $id = (int)($_GET['performance_id'] ?? 0);
            if ($id <= 0) {
                app()->route->redirect('/academicPerformance');
                exit;
            }

            $academicPerformance = \Model\AcademicPerformance::find($id);
            if (!$academicPerformance) {
                app()->route->redirect('/academicPerformance');
                exit;
            }

            return (new View())->render('site.academicPerformance_edit', [
                'academicPerformance' => $academicPerformance
            ]);
        }

        // POST — обновляем данные
        $id = (int)($_POST['performance_id'] ?? 0);
        if ($id > 0) {
            $academicPerformance = \Model\AcademicPerformance::find($id);
            if ($academicPerformance) {
                // Обновляем поля
                $academicPerformance->group_number = $_POST['group_number'] ?? '';
                $academicPerformance->lastname = $_POST['lastname'] ?? '';
                $academicPerformance->firstname = $_POST['firstname'] ?? '';
                $academicPerformance->patronymic = $_POST['patronymic'] ?? '';
                $academicPerformance->grade = $_POST['grade'] ?? '';
                $academicPerformance->type_of_control = $_POST['type_of_control'] ?? '';
                $academicPerformance->save();
            }
        }

        app()->route->redirect('/academicPerformance');
        exit;
    }
    public function group_edit(Request $request): string
    {
        // GET — показываем форму редактирования
        if ($request->method !== 'POST') {
            $id = (int)($_GET['group_id'] ?? 0);
            if ($id <= 0) {
                app()->route->redirect('/group');
                exit;
            }

            $group = \Model\Group::find($id);
            if (!$group) {
                app()->route->redirect('/group');
                exit;
            }

            return (new View())->render('site.group_edit', [
                'group' => $group
            ]);
        }

        // POST — обновляем данные
        $id = (int)($_POST['group_id'] ?? 0);
        if ($id > 0) {
            $group = \Model\Group::find($id);
            if ($group) {
                $group->group_number = $_POST['group_number'] ?? '';
                $group->specialization = $_POST['specialization'] ?? '';
                $group->year_of_admission = (int)($_POST['year_of_admission'] ?? 0);
                $group->save();
            }
        }

        app()->route->redirect('/group');
        exit;
    }
    public function staff_edit(Request $request): string
    {
        // GET — показываем форму редактирования
        if ($request->method !== 'POST') {
            $id = (int)($_GET['staff_id'] ?? 0);
            if ($id <= 0) {
                app()->route->redirect('/staff');
                exit;
            }

            $staff = \Model\Staff::find($id);
            if (!$staff) {
                app()->route->redirect('/staff');
                exit;
            }

            return (new View())->render('site.staff_edit', [
                'staff' => $staff
            ]);
        }

        // POST — обновляем данные
        $id = (int)($_POST['staff_id'] ?? 0);
        if ($id > 0) {
            $staff = \Model\Staff::find($id);
            if ($staff) {
                $staff->staff_id = $_POST['staff_id'] ?? '';
                $staff->lastname = $_POST['lastname'] ?? '';
                $staff->firstname = $_POST['firstname'] ?? '';
                $staff->patronymic = $_POST['patronymic'] ?? '';
                $staff->birth_date = $_POST['birth_date'] ?? '';
                $staff->role_staff = $_POST['role_staff'] ?? '';
                $staff->registration_address = $_POST['registration_address'] ?? '';
                $staff->login = $_POST['login'] ?? '';
                $staff->password = $_POST['password'] ?? '';
                $staff->save();
            }
        }

        app()->route->redirect('/staff');
        exit;
    }
    public function student_edit(Request $request): string
    {
        // GET — показываем форму редактирования
        if ($request->method !== 'POST') {
            $id = (int)($_GET['student_id'] ?? 0);
            if ($id <= 0) {
                app()->route->redirect('/student');
                exit;
            }

            $student = \Model\Students::find($id);
            if (!$student) {
                app()->route->redirect('/student');
                exit;
            }

            return (new View())->render('site.student_edit', [
                'student' => $student
            ]);
        }

        // POST — обновляем данные
        $id = (int)($_POST['student_id'] ?? 0);
        if ($id > 0) {
            $student = \Model\Students::find($id);
            if ($student) {
                $student->student_id = $_POST['student_id'] ?? '';
                $student->lastname = $_POST['lastname'] ?? '';
                $student->firstname = $_POST['firstname'] ?? '';
                $student->patronymic = $_POST['patronymic'] ?? '';
                $student->gender = $_POST['gender'] ?? '';
                $student->group_number = $_POST['group_number'] ?? '';
                $student->registration_address = $_POST['registration_address'] ?? '';
                $student->save();
            }
        }

        app()->route->redirect('/student');
        exit;
    }

}
