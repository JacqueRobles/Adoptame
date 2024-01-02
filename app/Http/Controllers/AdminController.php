<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Commune;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function manageUsers()
    {
        $users = User::paginate(10);
        return view('admin.user-show', compact('users'));
    }

    public function updateUser(Request $request, string $id)
    {
        $request->validate([
            'commune_name' => 'required',
        ]);
        $user = User::find($id);
        $user->assignRole('organization');
        $commune_name = $request->input('commune_name');
        $commune = Commune::firstOrCreate(['commune_name' => $commune_name]);
        $user->commune()->associate($commune);
        $user->save();
        return redirect()->route('admin.show_users');
    }
}
