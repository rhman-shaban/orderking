<?php

namespace App\Models;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'email', 'adress', 'password');
    protected $visible = array('name', 'phone', 'email', 'adress','created_at');
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

    public function toResource()
    {
        return new \App\Http\Resources\UserResource($this);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

}
