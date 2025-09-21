<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Students;

class StudentController
{
    public function index(Request $request): string
    {
        $students = Students::all();
        return (new View())->render('site.students', ['students' => $students]);
    }
}