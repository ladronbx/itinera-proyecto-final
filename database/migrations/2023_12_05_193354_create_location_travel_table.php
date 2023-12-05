<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('location_travel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("travel_id");
            $table->foreign("travel_id")->references("id")->on("travels")->constrained()->onDelete('cascade');
            $table->unsignedBigInteger("location_id");
            $table->foreign("location_id")->references("id")->on("locations")->constrained()->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('location_travel');
    }
};