<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Studentgroups;

class GroupController
{
    public function index(Request $request): string
    {
        $groups = Studentgroups::all(); //
        return (new View())->render('site.groups', [
            'groups' => $groups //
        ]);
    }
}