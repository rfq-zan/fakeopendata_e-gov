<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
    {
        use HasFactory;
            protected $fillable = [
            'title',
            'slug',
            'category',
            'description',
            'file_path',
            'rows_count',
        ];
        public function records()
         {
             return $this->hasMany(DatasetRecord::class);
         }
    }
