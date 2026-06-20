<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description', 'tech_stack'];

    // علاقة المشروع مع الوسائط الإضافية (Images & Videos)
    public function media()
    {
        return $this->hasMany(ProjectMedia::class);
    }
}