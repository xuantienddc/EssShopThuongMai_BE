<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('giao_dichs', function (Blueprint $table) {
            $table->id();
            $table->integer('creditAmount');
            $table->text('description');
            $table->string('pos');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('giao_dichs');
    }
};
