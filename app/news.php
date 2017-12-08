<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table= 'tintuc';
    protected $fillable = [ 'id', 'TieuDe', 'TieuDeKhongDau', 'TomTat', 'NoiDung', 'Hinh', 'NoiBat', 'SoLuotXem', 'idLoaiTin', 'created_at', 'updated_at'];

}
