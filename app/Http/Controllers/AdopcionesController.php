<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Events\AdoptionsTableUpdated;

class AdopcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $adoptions = Adoption::latest()->paginate(5);

        return view('adoptions.index', compact('adoptions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //check auth
        if (!auth()->user()) {
            return redirect()->route('login');
        }
        return view('adoptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'breed' => 'required',
            'description' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $adoption = Adoption::find($id)->delete();
        //event(new AdoptionsTableUpdated(auth()->user()));


        return redirect()->route('experiences.index')
            ->with('success', 'Experience deleted successfully');    }
}
