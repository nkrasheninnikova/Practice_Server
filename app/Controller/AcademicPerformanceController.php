<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Academicperformance;

class AcademicperformanceController
{
    public function index(Request $request): string
    {
        $academicPerformances = Academicperformance::all();
        return (new View())->render('site.academicperformance', ['academicPerformance' => $academicPerformances]);
    }
}