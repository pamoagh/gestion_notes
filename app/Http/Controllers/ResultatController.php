<?php

namespace App\Http\Controllers;

use App\Models\UE;
use App\Models\Etudiant;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultatController extends Controller
{
    public function afficherResultats()
    {
        $resultats = DB::table('etudiants')
            ->join('notes', 'etudiants.id', '=', 'notes.etudiant_id')
            ->join('unites_enseignement', 'notes.ue_id', '=', 'unites_enseignement.id')
            ->select('etudiants.id as etudiant_id', 'etudiants.nom', 'unites_enseignement.semestre',
                DB::raw('AVG(notes.note) as moyenne'),
                DB::raw('AVG(notes.note) >= 10 as validation'),
                DB::raw('IF(AVG(notes.note) >= 10, 1, 0) as passage')  // Modification ici
            )
            ->groupBy('etudiants.id', 'unites_enseignement.semestre')
            ->get();

        return view('resultats', ['resultats' => $resultats]);
    }

    public function index()
{
    // Retourne une vue avec les résultats
    return view('resultats.index');
}

}

