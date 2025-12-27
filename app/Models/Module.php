<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ADD THIS

class Module extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'coefficient',
        'volume_horaire',
        'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class, 'module_id');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'module_id');
    }
    
    public function notes()
    {
        return $this->hasMany(Note::class, 'module_id');
    }
}