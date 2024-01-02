@extends('layouts.app')

@section('content')
<section class="flex flex-col justify-center items-center min-h-full  text-black py-5">
    <div class="w-5/6 min-h-full h-full bg-zinc-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-xl mb-10">
        <div class="flex min-h-1/2 h-1/2">
            <div class="w-1/3 m-5">
                @if(optional($petition->user->profilePhoto)->path) 
                    <img src="{{($petition->user->profilePhoto)->path}}"  alt="pet image" class="h-full w-auto rounded-md">
                @else
                    <!-- Display a default image or a message -->
                    <img src="{{ asset('storage/images/pet-default.png') }}" alt="pet image" class="h-full w-auto rounded-md">
                @endif 
            </div>
            <div class="w-2/3 h-full m-5 text-white">
                <div class="flex gap-5 max-w-full">
                    <div class="flex gap-3">
                        <p class="text-lg">Nombre:</p>
                        <h1 class="text-lg font-bold text-gray-800 dark:text-white">{{ $petition->pet->nickname}}</h1>
                    </div>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full font-medium border border-teal-500 text-teal-500 text-sm">{{$petition->pet->type}}</span>
                </div>  
                <div class="flex justify-between text-justify gap-5">
                    <div class="">
                        <p>{{ $petition->feature }}</p>
                    </div>
                    <div class="h-full">
                        {{-- @if ($petition->pet->adoption == false)
                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Looking for a home</span>
                        @else
                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Adopted</span>
                        @endif --}}
                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">{{$petition->user->commune->commune_name}}</span>

                    </div>
                </div>
                
                <div class="mt-5 sm:mt-auto">
                    <!-- Avatar -->
                          <div class="flex items-center">
                            <div class="flex-shrink-0">
                              @if(optional($image = $petition->pet->profilePhoto)->path)
    
                                <img class="h-20 w-20 rounded-md" src="{{ Storage::url($image->path) }}" alt="Image Description">
                              @else
                                <!-- Display a default image or a message -->
                                <img src="{{ asset('storage/images/pet-default.png') }}" alt="pet image" class="h-[2.875rem] w-[2.875rem] rounded-full"">
                              @endif 
                            
                            </div>
                            <div class="ms-2.5 sm:ms-4 place-items-end">
                              <h4 class="font-semibold text-gray-800 dark:text-gray-200">
                                {{$petition->pet->organization->name}}
                              </h4>
                              <p class="text-xs text-gray-500">
                                {{$petition->created_at->format('d/m/Y')}}
                              </p>
                            </div>
                          </div>
                            <!-- End Avatar -->
                            @if ($petition->status !== 'confirmed')
                            <a type="button" href="{{route('petition.confirm', $petition->id)}}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 mt-20">
                              Confirm adoption
                            </a>
                            @else
                             <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full font-medium border border-teal-500 text-teal-500 text-sm m-20">Adoption confirmed</span>
                            @endif
                </div>
            </div>
        </div>

@endsection