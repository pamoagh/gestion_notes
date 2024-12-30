<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    // Champs qui peuvent être remplis
    protected $fillable = ['numero_etudiant', 'nom', 'prenom', 'niveau'];

    // Relation avec les notes (un étudiant peut avoir plusieurs notes)
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
