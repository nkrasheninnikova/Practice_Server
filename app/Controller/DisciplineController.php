<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Disciplines;

class DisciplineController
{
    public function index(Request $request): string
    {
        $disciplines = Disciplines::all();
        return (new View())->render('site.disciplines', ['disciplines' => $disciplines]);
    }
}