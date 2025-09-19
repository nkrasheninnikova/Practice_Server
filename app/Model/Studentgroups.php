<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'studentsgroups';
    protected $primaryKey = 'group_id';
    public $timestamps = false;
    protected $fillable = [
        'group_name',
        'course_number',
        'semester'
    ];
}