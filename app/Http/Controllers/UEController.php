<?php

namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ues = UE::all();
        return view('ues.index', compact('ues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:unites_enseignement',
            'nom' => 'required',
            'credits_ects' => 'required|integer|min:1|max:30',
            'semestre' => 'required|integer|min:1|max:6',
        ]);
    
        UE::create($request->all());
    
        return redirect()->route('ues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(UE $uE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UE $uE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UE $uE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UE $uE)
    {
        //
    }
}
