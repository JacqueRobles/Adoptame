<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Organization;
use App\Models\User;
use App\Models\Image;
use Spatie\Permission\Middlewares\RoleMiddleware;


class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|organization')->only(['create', 'store', 'edit', 'update']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::all();  
        return view('pets.index', ['pets' => $pets]);   //compact('pets'));
    }

    public function indexAdoption()
    {
        //
        $pets = Pet::where('adopter', false);  
        return view('pets.index', ['pets' => $pets]);   //compact('pets'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations = User::role('organization')->get();
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
            'profile_photo_path' => 'required|image',
            'images.*' => 'image'
        ]);
        
        $pet = new Pet([
            'nickname' => $request->input('nickname'),
            'type' => $request->input('type'),
            'biography' => $request->input('biography'),
            'feature' => $request->input('feature'),
            'organization_id' => auth()->id(),
        ]);
        $pet->save();

        if($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $path = $file->store('images', 'public');
    
            $image = new Image;
            $image->path = $path;
            $pet->images()->save($image);
        }

        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $image = new Image;
                $image->path = $path;
                $pet->images()->save($image);
            }
        }

        return redirect()->route('pet.index');

    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = Pet::findOrFail($id);
        $images = $pet->images;
        return view('pets.show', compact('pet'));
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = Pet::findOrFail($id);
        $organizations = User::all();
        return view('pets.edit', compact('pet', 'organizations'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nickname' => 'required|max:255',
            'type' => 'required',
            'biography' => 'required',
            'feature' => 'required',
            'profile_photo_path' => 'required|image',
        ]);

        $pet = Pet::findOrFail($id);
        $pet->nickname = $request->input('nickname');
        $pet->type = $request->input('type');
        $pet->biography = $request->input('biography');
        $pet->feature = $request->input('feature');
        $pet->save();

        if($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $path = $file->store('images', 'public');
    
            $image = new Image;
            $image->path = $path;
            $pet->images()->save($image);
        }

        return redirect()->route('pet.index')
            ->with('success', 'Pet updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect()->route('pet.index')
            ->with('success', 'Pet deleted successfully.');
    }
}