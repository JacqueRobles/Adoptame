<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class InComeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::all();
        return view('incomes.index', compact('incomes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incomes.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income();
        $income->property1 = $request->input('property1');
        $income->property2 = $request->input('property2');
        // Set other properties as needed

        $income->save();

        return redirect()->route('incomes.index')->with('success', 'Income created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income = Income::find($id);
        return view('incomes.show', compact('income'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::find($id);
        return view('incomes.edit', compact('income'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income = Income::find($id);
        $income->property1 = $request->input('property1');
        $income->property2 = $request->input('property2');
        // Update other properties as needed

        $income->save();

        return redirect()->route('incomes.index')->with('success', 'Income updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income = Income::find($id);
        $income->delete();

        return redirect()->route('incomes.index')->with('success', 'Income deleted successfully');
    }
}