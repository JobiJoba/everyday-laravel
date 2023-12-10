<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_five_generated_fillables', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('other_one')->nullable();
            $table->integer('another_one');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_five_generated_fillables');
    }
};
