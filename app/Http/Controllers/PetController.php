<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Organization;


class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $organizations = Organization::all();
        return view('pets.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|max:255',
            'type' => 'required',
            'biography' => 'required',
            'feature' => 'required',
            'organization_id' => 'required',
            'profile_photo_path' => 'required',
        ]);
    
        $pet = new Pet($request->all());
        $pet->save();
    
        return redirect()->route('pet.index')
            ->with('success','Pet created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = Pet::findOrFail($id);        
        return view('pets.show', compact('pet'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}