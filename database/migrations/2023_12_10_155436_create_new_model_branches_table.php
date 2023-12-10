<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('new_model_branches', function (Blueprint $table) {
            $table->id();
            $table->string('test');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('new_model_branches');
    }
};
