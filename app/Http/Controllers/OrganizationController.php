<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Organization;
use app\Models\Pet;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //        
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
        
    }


//     public function index()
//   {
//     $posts = Post::all();
//     return view('posts.index', compact('posts'));
//   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $organization = new Organization($request->All());
        $organization->save();
        return redirect()->route('organization.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organization = Organization::find($id);
        return view('organizations.show', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //dd('¿que es el $id que llega?' .$id);
        $organization = Organization::find($id);

        return view('organizations.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $organization = Organization::find($id);
        $organization->fill($request->all());
        $organization->save();
        return redirect()->route('organization.index');
    }

    // Example controller method
    public function updateProfilePhoto(Request $request, Organization $organization, Pet $pet)
    {
        // Validate and store the new profile photo
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');

        // Update the pet's profile photo path
        $pet->update(['profile_photo_path' => $profilePhotoPath]);

        // Additional logic as needed

        return redirect()->back()->with('success', 'Profile photo updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $organization = Organization::find($id);
        $organization->delete();
        return redirect()->route('organization.index');
    }
}