<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{

    protected $table = 'merchants';
    public $timestamps = true;
    protected $guarded = array('password');
    protected $fillable = array('owner_name', 'shop_name', 'phone', 'email', 'adress');
    protected $visible = array('owner_name', 'shop_name', 'phone', 'email', 'adress');
    protected $hidden = array('password');

    public function users()
    {
        return $this->hasMany('User');
    }

}
