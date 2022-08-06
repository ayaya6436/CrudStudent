<?php

namespace App\Models;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{  
    protected $fillable = ['nom','prenom','classe_id'];
    use HasFactory;
    public function classe(){
        return $this->belongsTo(Classe::class); 
    }
}
 