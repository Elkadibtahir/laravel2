<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'specialite',
        'date_embauche',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class, 'teacher_id');
    }
    
    public function sessions()
    {
        return $this->hasMany(Session::class, 'teacher_id');
    }
}