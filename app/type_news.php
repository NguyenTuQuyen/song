<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_news extends Model
{
    protected $table= 'loaitin';
    protected $fillable = ['id','idTheLoai', 'Ten', 'created_at','updated_at'];

}
