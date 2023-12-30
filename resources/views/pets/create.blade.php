@extends('layouts.app')

@section('content')

    <h6> Ingresar datos de mascota</h6>
    <form method="POST" action="{{ route('pet.store') }}">
        @csrf

        <select class="col-6 form-select" name="organization_id">
            @foreach ($organizations as $organization)
                <option value="{{$organization->id}}">{{$organization->name}}</option>
            @endforeach
        </select>


        <br><br><br><br>


        <input type="text" class="col-6" name="nickname" placeholder="Sobrenombre mascota en adopción"
            autocomplete="off">

        <br><br>

        <select class="col-6 form-select" name="type">
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
        </select>

        <br><br>


        <button type="submit" class="btn btn-primary">Guardar Mascota</button>
    </form>

@endsection