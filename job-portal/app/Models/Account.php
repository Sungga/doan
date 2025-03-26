<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts'; // Đặt tên bảng
    protected $fillable = ['email', 'password', 'role'];
    protected $hidden = ['password']; // Ẩn mật khẩu khi trả về JSON
}
