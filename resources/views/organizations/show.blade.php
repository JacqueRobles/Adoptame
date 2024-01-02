@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center items-center min-h-full  text-black py-5">
    <div class="w-5/6 min-h-full h-full bg-zinc-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-xl mb-10">
        <div class="flex min-h-1/2 h-1/2">
            <div class="w-1/3 m-5">
                @if(optional($image = $organization->profilePhoto)->path)
                    <img src="{{ Storage::url($image->path) }}" alt="pet image" class="h-full w-auto rounded-md">
                @else
                    <!-- Display a default image or a message -->
                    <img src="{{ asset('storage/images/pet-default.png') }}" alt="pet image" class="h-full w-auto rounded-md">
                @endif 
            </div>
            <div class="w-2/3 h-full m-5 text-white">
                <div class="flex gap-5 max-w-full">
                    <div class="flex gap-3">
                        <p class="text-lg">Nombre:</p>
                        <h1 class="text-lg font-bold text-gray-800 dark:text-white">{{ $organization->name}}</h1>
                    </div>
                    @if($organization->commune)
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full font-medium border border-teal-500 text-teal-500 text-sm">{{$organization->commune->commune_name}}</span>
                    @endif
                </div>  
                <div class="flex justify-between text-justify gap-5">
                    <div class="">
                        <p>{{ $organization->phone }}</p>
                        <p>{{ $organization->address }}</p>
                        <p>{{ $organization->email }}</p>
                        <p>{{ $organization->web }}</p>

                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection