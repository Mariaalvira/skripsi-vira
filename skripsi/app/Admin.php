<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notification\Notifiable;

class Admin extends Authenticable
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
}