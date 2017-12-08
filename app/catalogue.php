<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalogue extends Model
{
    protected $table= 'theloai';
    protected $fillable = ['id','Ten', 'TenKhongDau','catalogue_order','catalogue_keywords','Destination', 'parent_id', 'created_at','updated_at'];

}
