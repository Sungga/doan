<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Đặt tên bảng
    protected $fillable = ['name'];
}
