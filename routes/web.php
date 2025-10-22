<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add('GET', '/', [Controller\Site::class, 'hello_guest']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/staff', [Controller\Site::class, 'staff'])->middleware('role:admin');
Route::add('GET', '/student', [Controller\Site::class, 'student'])->middleware('role:staff');
Route::add('GET', '/academicPerformance', [Controller\Site::class, 'academicPerformance']) ->middleware('role:staff');
Route::add('GET', '/group', [Controller\Site::class, 'group'])->middleware('role:staff');
Route::add('GET', '/discipline', [Controller\Site::class, 'discipline'])->middleware('role:admin,staff');

Route::add(['GET', 'POST'], '/student/add', [Controller\Site::class, 'student_add'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/group/add', [Controller\Site::class, 'group_add'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/discipline/add', [Controller\Site::class, 'discipline_add'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/academicPerformance/add', [Controller\Site::class, 'academicPerformance_add'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/staff/add', [Controller\Site::class, 'staff_add'])->middleware('role:admin');

Route::add(['GET', 'POST'], '/student/delete', [Controller\Site::class, 'student_delete'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/staff/delete', [Controller\Site::class, 'staff_delete'])->middleware('role:admin');
Route::add(['GET', 'POST'], '/group/delete', [Controller\Site::class, 'group_delete'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/discipline/delete', [Controller\Site::class, 'discipline_delete'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/academicPerformance/delete', [Controller\Site::class, 'academicPerformance_delete'])->middleware('role:staff');

Route::add(['GET', 'POST'], '/discipline/edit', [Controller\Site::class, 'discipline_edit'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/academicPerformance/edit', [Controller\Site::class, 'academicPerformance_edit'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/group/edit', [Controller\Site::class, 'group_edit'])->middleware('role:staff');
Route::add(['GET', 'POST'], '/staff/edit', [Controller\Site::class, 'staff_edit'])->middleware('role:admin');
Route::add(['GET', 'POST'], '/student/edit', [Controller\Site::class, 'student_edit'])->middleware('role:staff');

