<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    protected $fillable = [
        'email',
        'username',
        'password',
        'active'
    ];


    public static $rules = [
        'create'=>[
            'email' => 'required|unique:users',
            'fullname'              =>  'required|unique:users',//email must not be the same as username
            'password'              =>  'Required|AlphaNum|Between:4,8|Confirmed', //matching password field must be named as 'password_confirmation' in form
            'password_confirmation' =>  'Required|AlphaNum|Between:4,8',
        ],
        'update'=>[
            'fullname'              =>  'required',
        ]
    ];


    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
