<?php

namespace App\Models;
use DateTimeInterface;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Merchant extends Authenticatable
{

    protected $table = 'merchants';
    public $timestamps = true;
    protected $guarded = array('password');
    protected $fillable = array('name', 'shop_name', 'phone', 'email', 'adress');
    protected $visible = array('name', 'shop_name', 'phone', 'email', 'adress','created_at');
    protected $hidden = array('password');

    public function users()
    {
        return $this->hasMany('User');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

}
