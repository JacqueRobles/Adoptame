<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Models\Pet;
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
        $this->authorize('create', Pet::class);
        return view('adoptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_adoption' => 'required',
            'prox_control_date' => 'required',
            'retirement_date' => 'required',
            'pet_id' => 'required',
        ]);

        $adoption = new Adoption([
            'date_adoption' => $request->input('date_adoption'),
            'prox_control_date' => $request->input('prox_control_date'),
            'retirement_date' => $request->input('retirement_date'),
            'pet_id' => $request->input('pet_id'),
            'user_id' => auth()->id(),           //currently authenticated user
        ]);

        $adoption->save();

        return redirect()->route('adoptions.index')
            ->with('success', 'Adoption created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $adoption = Adoption::find($id);

        if (!$adoption) {
            return redirect()->route('adoptions.index')
                ->with('error', 'Adoption not found');
        }

        return view('adoptions.show', compact('adoption'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adoption = Adoption::find($id);

        if (!$adoption) {
            return redirect()->route('adoptions.index')
                ->with('error', 'Adoption not found');
        }

        $this->authorize('update', $adoption);
        return view('adoptions.edit', compact('adoption'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'prox_control_date' => 'required',
            'retirement_date' => 'required',
            'pet_id' => 'required',
        ]);

        $adoption = Adoption::find($id);

        if (!$adoption) {
            return redirect()->route('adoptions.index')
                ->with('error', 'Adoption not found');
        }

        $adoption->prox_control_date = $request->input('prox_control_date');
        $adoption->retirement_date = $request->input('retirement_date');
        $adoption->pet_id = $request->input('pet_id');
        $adoption->user_id = auth()->id();           //currently authenticated user

        $adoption->save();

        return redirect()->route('adoptions.index')
            ->with('success', 'Adoption updated successfully');
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
