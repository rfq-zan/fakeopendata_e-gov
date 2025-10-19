<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('file_path')->nullable(); // storage path to CSV
            $table->unsignedBigInteger('rows_count')->default(0);
            $table->timestamps();
        });
    }


    public function down(): void
        {
            Schema::dropIfExists('datasets');
        }
    };
