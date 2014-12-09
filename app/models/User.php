<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public function setPasswordAttribute($pass){

		$this->attributes['password'] = Hash::make($pass);

	}

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = array('email', 'username', 'password');


	static public $rules = array(
		'username' => 'required|alpha_dash|',
		'email' => 'required|email|unique:users,email',
	);


	public function posts()
    {
        return $this->hasMany('Post');
    }

}
