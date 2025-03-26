<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id(); // ID user
            $table->string('email')->unique(); // Email đăng nhập
            $table->string('password'); // Mật khẩu đã mã hóa
            $table->tinyInteger('role')->default(0)->unsigned(); // Thêm trường role (0 - 9)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
