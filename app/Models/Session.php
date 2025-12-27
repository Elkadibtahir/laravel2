<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    // Remove custom table name
    // protected $table = "sessionss"; // DELETE THIS LINE
    
    protected $fillable = [
        'salle',
        'date_session',
        'heure_debut',
        'heure_fin',
        'class_id',
        'module_id',
        'teacher_id',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id'); // Fixed from Matiere
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}