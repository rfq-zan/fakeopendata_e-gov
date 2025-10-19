<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
    {
        public function up(): void
            {
                Schema::create('dataset_records', function (Blueprint $table) {
                $table->id();
                $table->foreignId('dataset_id')->constrained('datasets')->cascadeOnDelete();
                $table->json('data'); // each row as JSON object {col: value}
                $table->timestamps();
            });
    }


    public function down(): void
        {
            Schema::dropIfExists('dataset_records');
        }
    };
