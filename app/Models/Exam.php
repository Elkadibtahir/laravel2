<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
   

    protected $fillable = [
        'type_exam',
        'date_exam',
        'class_id',
        'module_id',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}