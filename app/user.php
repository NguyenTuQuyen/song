<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;




class user extends Authenticatable
{
    protected $table= 'users';
    protected $fillable = ['id', 'name', 'email', 'quyen', 'password', 'remember_token', 'created_at', 'updated_at'];

}