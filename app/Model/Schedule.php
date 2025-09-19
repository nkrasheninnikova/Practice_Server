<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'shedule_id';
    public $timestamps = false;
    protected $fillable = [
        'discipline_id',
        'group_id',
        'teacher_id',
        'class_date',
        'class_time',
        'classroom'
    ];
}