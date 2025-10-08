<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/staff', [Controller\Site::class, 'staff']);
Route::add('GET', '/student', [Controller\Site::class, 'student']);
Route::add('GET', '/academicPerformance', [Controller\Site::class, 'academicPerformance']);
Route::add('GET', '/group', [Controller\Site::class, 'group']);
Route::add('GET', '/discipline', [Controller\Site::class, 'discipline']);
Route::add(['GET', 'POST'], '/student/add', [Controller\Site::class, 'student_add']);
Route::add(['GET', 'POST'], '/group/add', [Controller\Site::class, 'group_add']);
Route::add(['GET', 'POST'], '/discipline/add', [Controller\Site::class, 'discipline_add']);
Route::add(['GET', 'POST'], '/academicPerformance/add', [Controller\Site::class, 'academicPerformance_add']);
Route::add(['GET', 'POST'], '/staff/add', [Controller\Site::class, 'staff_add']);
Route::add(['GET', 'POST'], '/student/delete', [Controller\Site::class, 'student_delete']);
Route::add(['GET', 'POST'], '/staff/delete', [Controller\Site::class, 'staff_delete']);
Route::add(['GET', 'POST'], '/group/delete', [Controller\Site::class, 'group_delete']);
Route::add(['GET', 'POST'], '/discipline/delete', [Controller\Site::class, 'discipline_delete']);
Route::add(['GET', 'POST'], '/academicPerformance/delete', [Controller\Site::class, 'academicPerformance_delete']);
Route::add(['GET', 'POST'], '/discipline/edit', [Controller\Site::class, 'discipline_edit']);
Route::add(['GET', 'POST'], '/academicPerformance/edit', [Controller\Site::class, 'academicPerformance_edit']);
Route::add(['GET', 'POST'], '/group/edit', [Controller\Site::class, 'group_edit']);
Route::add(['GET', 'POST'], '/staff/edit', [Controller\Site::class, 'staff_edit']);
Route::add(['GET', 'POST'], '/student/edit', [Controller\Site::class, 'student_edit']);

