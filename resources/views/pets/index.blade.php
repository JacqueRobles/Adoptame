@extends('layouts.app')
@section('content')
<section class="min-w-screen min-h-screen text-white">
    <h1>Mascotas en adopción</h1>
    <br>
    <a href="{{ route('pet.create') }}"><button type="button" class="btn btn-primary">Agregar Mascota</button> </a>

    <table class="table table-bordered">
        <thead>
            <th>Nombre Mascota</th>
            <th>Tipo</th>
            <th>Organizacion (direccion)</th>
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
<section>
@endsection