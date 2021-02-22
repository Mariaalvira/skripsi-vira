<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notification\Notifiable;

class Akun extends Authenticable
{
	use Notifiable;

    protected $table = 'akun';
    public $primaryKey = 'id_akun';
protected $guard = 'akun';

protected $fillable = ['nama_admin', 'email', 'password', 'role_user'];
protected $hidden = ['password'];
}