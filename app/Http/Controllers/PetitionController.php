<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petition;
use App\Models\Pet;
use App\Models\User;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get the currently authenticated user's ID
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        if($user->getRoleNames()->isEmpty()){
            $petitions = Petition::where('user_id', $id)->paginate(5);
        }elseif($user->hasRole('organization')){
            $petitions = Petition::whereHas('pet', function($q) use ($id){
                $q->where('organization_id', $id);
            })->paginate(5);
        }else{
            $petitions = Petition::paginate(5);
        }
        return view('petitions.index', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pet = Pet::findOrFail($id);
        return view('petitions.create', compact('pet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'required',
            'description' => 'required',
            'status' => 'required',
            'email' => 'required',
        ]);
    
        $petition = new Petition([
            'pet_id' => $request->input('pet_id'),
            'user_id' =>auth()->user()->id,
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'email' => $request->input('email'),
            'date' =>today(),
        ]);
        $petition->save();
    
        return redirect()->route('petition.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $petition = Petition::findOrFail($id);
        return view('petitions.show', compact('petition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $petition = Petition::findOrFail($id);
        return view('petitions.edit', compact('petition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pet_id' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
    
        $petition = Petition::findOrFail($id);
        $petition->pet_id = $request->input('pet_id');
        $petition->user_id = auth()->user()->id;
        $petition->description = $request->input('description');
        $petition->status = $request->input('status');
        $petition->date = today();
        $petition->save();
    
        return redirect()->route('petitions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $petition = Petition::findOrFail($id);
        $petition->delete();
        return redirect()->route('petitions.index')->with('success', 'Petition deleted successfully');
    }

public function confirm(string $id)
    {
        $petition = Petition::findOrFail($id);
        $petition->status = 'confirmed';
        $petition->pet->adoption = true;
        $petition->pet->adopter_id = $petition->user_id;
        $petition->save();
        $petition->pet->save();
        return redirect()->route('petition.index')->with('success', 'Petition confirmed successfully');
    }
    
}
