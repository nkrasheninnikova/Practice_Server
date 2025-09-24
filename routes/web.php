<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/student', [Controller\Site::class, 'student']);
Route::add('GET', '/academicPerformance', [Controller\Site::class, 'academicPerformance']);
Route::add('GET', '/group', [Controller\Site::class, 'group']);
Route::add('GET', '/discipline', [Controller\Site::class, 'discipline']);
Route::add(['GET', 'POST'], '/student/add', [Controller\Site::class, 'student_add']);
Route::add(['GET', 'POST'], '/group/add', [Controller\Site::class, 'group_add']);
Route::add(['GET', 'POST'], '/discipline/add', [Controller\Site::class, 'discipline_add']);
Route::add(['GET', 'POST'], '/academicPerformance/add', [Controller\Site::class, 'academicPerformance_add']);
Route::add(['GET', 'POST'], '/staff/add', [Controller\Site::class, 'staff_add']);


