<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headquarter;

class HeadquarterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:organization', 'role:admin'])->only(['create', 'store', 'edit', 'update']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headquarters = Headquarter::all();
        return view('headquarters.index', compact('headquarters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('headquarters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $headquarter = new Headquarter();
        $headquarter->name = $request->input('name');
        $headquarter->address = $request->input('address');
        $headquarter->save();

        return redirect()->route('headquarters.index')->with('success', 'Headquarter created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $headquarter = Headquarter::find($id);
        return view('headquarters.show', compact('headquarter'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $headquarter = Headquarter::find($id);
        return view('headquarters.edit', compact('headquarter'));
    }
    /**
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $headquarter = Headquarter::find($id);
        $headquarter->name = $request->input('name');
        $headquarter->address = $request->input('address');
        $headquarter->save();

        return redirect()->route('headquarters.index')->with('success', 'Headquarter updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $headquarter = Headquarter::find($id);
        $headquarter->delete();

        return redirect()->route('headquarters.index')->with('success', 'Headquarter deleted successfully');
    }
}
