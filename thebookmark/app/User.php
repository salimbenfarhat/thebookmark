<?php

namespace thebookmark;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $fillable = ['email', 'password'];

    protected $guarded = ['role'];
    
    protected $hidden = ['password', 'remember_token'];
}
