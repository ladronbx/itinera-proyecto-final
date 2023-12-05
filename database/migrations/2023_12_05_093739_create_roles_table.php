<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->enum('role_name', ['user', 'admin', 'super_admin'])->default('user');
            $table->string('description_privilege', 255);
            $table->timestamps();
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now())->onUpdate(now());
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
