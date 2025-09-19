<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Disciplines extends Model
{
    protected $table = 'disciplines';
    protected $primaryKey = 'disciplines_id';
    public $timestamps = false;
    protected $fillable = [
        'discipline_name'
    ];
}