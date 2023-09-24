<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name');
    protected $visible = array('name');
    protected $hidden = array('password');

}
