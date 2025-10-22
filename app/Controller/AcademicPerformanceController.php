<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Academicperformance;

class AcademicPerformanceController
{
    public function index(Request $request): string
    {
        $academicPerformances = Academicperformance::all();
        return (new View())->render('site.academicPerformance', ['academicPerformance' => $academicPerformances]);
    }
}