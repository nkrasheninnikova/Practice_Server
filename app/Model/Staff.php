<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    public $timestamps = false;
    protected $fillable = [
        'role_staff',
        'lastname',
        'firstname',
        'patronymic',
        'login',
        'password',
        'registration_address',
        'birth_date',
    ];
}