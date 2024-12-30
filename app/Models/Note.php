<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Champs qui peuvent être remplis
    protected $fillable = ['etudiant_id', 'ec_id', 'note', 'session', 'date_evaluation'];

    // Relation avec l'étudiant (une note appartient à un étudiant)
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    // Relation avec l'EC (une note appartient à un EC)
    public function ec()
    {
        return $this->belongsTo(EC::class);
    }



}
