<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('full_name', 'phone', 'email', 'adress', 'password');
    protected $visible = array('full_name', 'phone', 'email', 'adress');
    protected $hidden = array('password');


	/**
	 * @return mixed
	 */
	public function getHidden() {
		return $this->hidden;
	}

	/**
	 * @param mixed $hidden
	 * @return self
	 */
	public function setHidden($hidden): self {
		$this->hidden = $hidden;
		return $this;
	}
}
