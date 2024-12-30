<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;

    // Déclare les champs qui peuvent être remplis
    protected $fillable = ['code', 'nom', 'credits_ects', 'semestre'];

    // Relation avec les ECs
    public function ecs()
    {
        return $this->hasMany(EC::class);
    }
}
