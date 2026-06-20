<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public static function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('description');
        $table->string('tech_stack'); // تأكد من وجود هذا السطر تماماً
            $table->timestamps();
        });
    }

    public static function down(): void
    {
        Schema::dropIfExists('projects');
    }
};