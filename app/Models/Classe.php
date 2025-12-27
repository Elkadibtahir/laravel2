<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model{
    // protected $primaryKey = 'id_classe';
   protected $fillable = ['nom_classe','niveau'];

    public function students(){ return $this->hasMany(Student::class,'classe_id'); }
}
