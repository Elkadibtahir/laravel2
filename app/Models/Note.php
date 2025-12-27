<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    

    protected $fillable = [
        'note',
        'student_id',
        'module_id',
        'date_note'
    ];

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function module(){
        return $this->belongsTo(Module::class, 'module_id');
    }
}