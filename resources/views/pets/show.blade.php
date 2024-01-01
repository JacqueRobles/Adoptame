@extends('layouts.app')

@section('content')
<section class="flex justify-center items-center min-h-full  text-black py-5">
    <div class="w-5/6 min-h-full h-full bg-zinc-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-xl">
        <div class="flex min-h-1/2 h-1/2">
            <div class="w-1/3 m-5">
                @if(optional($image = $pet->images->skip(1)->first())->path)
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
                        <h1 class="text-lg font-bold text-gray-800 dark:text-white">{{ $pet->nickname}}</h1>
                    </div>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full font-medium border border-teal-500 text-teal-500 text-sm">{{$pet->type}}</span>
                </div>  
                <div class="flex justify-between text-justify gap-5">
                    <div class="">
                        <p>{{ $pet->feature }}</p>
                    </div>
                    <div class="h-full">
                        @if ($pet->adoption == false)
                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Adopted</span>
                        @else
                        <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Looking for a home</span>
                        @endif
                    </div>
                </div>
                <a type="button" href="{{route('petition.create', ['id' => $pet->id]) }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Request adoption
                </a>
            </div>
        </div>
        <div class="w-full min-h-1/2 h-1/2">
            <div class="m-5 h-full flex-wrap text-white bg-slate-200 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 p-5">
                <p class="font-medium">Biography: </p>
                <p>{{ $pet->biography }}</p>
            </div>
        </div>
    </div>
</section>
@endsection