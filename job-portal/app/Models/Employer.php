<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'employers'; // Đặt tên bảng
    protected $fillable = ['id_user', 'name', 'avatar', 'email'];
}
