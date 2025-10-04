<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Academicperformance extends Model
{
    protected $table = 'academicperformance';
    protected $primaryKey = 'performance_id';
    public $timestamps = false;
    protected $fillable = [
        'student_id',
        'discipline_id',
        'grade',
        'hours_spent',
        'assessment_type',
        'group_number',
        'specialization',
        'discipline',
        'type_of_control',
        'lastname',
        'firstname',
        'patronymic',
    ];
}