@extends('layouts.app')
@section('content')
<section class="min-w-screen min-h-screen flex justify-center items-center h-full text-white py-5">
    <div class="w-5/6 h-full flex flex-col ">
        <h1 class="text-2xl">Mascotas en adopción</h1>
        <br>
        @auth
        {{-- @if (User::hasRole('organization')) --}}
        <a class="mt-5 py-3 px-4 w-1/6 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('pet.create') }}">
            <button type="button" class="">Agregar Mascota</button> </a>
            
        {{-- @endif --}}
        @endauth        
            
        <div class="mt-5">
            @include('components.card2', $pets)

        </div>
        <table class="table table-bordered">
            <thead>
                <th>Nombre Mascota</th>
                <th>Tipo</th>
                <thead>Organizacion (direccion)</th>
                </thead>
                <tbody>
                    @foreach ($pets as $pet)
            <tr>
                <td> {{ $pet->nickname }}</td>
                <td> {{ $pet->type }}</td>
                <tD>{{ $pet->organization->name }}</tD>
            </tr>
            @endforeach

        </tbody>
        
        </table>
    </div>
</section>
        @endsection