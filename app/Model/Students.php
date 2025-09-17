<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'student_id';

    // 3. Отключаем автоматические поля времени (created_at, updated_at)
    public $timestamps = false;

    // 4. Поля, которые можно массово заполнять (например, через create())
    protected $fillable = [
        'lastname',
        'firstname',
        'patronymic',
        'gender',
        'birth_date',
        'registration_address',
        'course_number',
        'group_id'
    ];
}
