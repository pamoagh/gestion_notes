<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EC extends Model
{
    use HasFactory;

    // Champs qui peuvent être remplis
    protected $fillable = ['code', 'nom', 'coefficient', 'ue_id'];

    // Relation avec l'UE (un EC appartient à une UE)
    public function ue()
    {
        return $this->belongsTo(UE::class);
    }

    // Relation avec les notes (un EC peut avoir plusieurs notes)
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
