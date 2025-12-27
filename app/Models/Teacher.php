<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // protected $primaryKey = 'id_prof';
    protected $fillable = ['user_id','specialite','telephone'];

    public function user(){ return $this->belongsTo(User::class,'user_id'); }
    public function modules(){ return $this->hasMany(Module::class,'teacher_id'); }
}

