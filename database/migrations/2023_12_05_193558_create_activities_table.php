<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false);
            $table->string('description', 255)->nullable(false);
            $table->string('image_1', 255)->default("https://cdn.avalos.sv/wp-content/uploads/default-featured-image.png");
            $table->string('image_2', 255)->default("https://cdn.avalos.sv/wp-content/uploads/default-featured-image.png");
            $table->integer('duration')->nullable(false);
            $table->unsignedBigInteger("location_id");
            $table->foreign("location_id")->references("id")->on("locations")->constrained()->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};