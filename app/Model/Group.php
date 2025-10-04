<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'group_id';
    public $timestamps = false;
    protected $fillable = [
        'group_number',
        'specialization',
        'year_of_admission'
    ];
}