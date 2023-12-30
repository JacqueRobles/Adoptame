//TEMPORAL
@extends('layouts.app')

@section('content')

    <h1>Ingresar Nombre de la Organización Que será parte de Adoptame.cl</h1>

    <form action="{{ route('organization.store') }}" method="POST">
        @csrf
        <input type="text" class="col-6"  name="name" placeholder="Nombre de la Organización" autocomplete="off">
        <br><br>
        <input type="text" class="col-6" name="address" placeholder="Direccion de la organización" autocomplete="off">
        <br><br>

        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <a class="btn btn-outline-secondary" href="{{ route('organization.index') }}">Cancelar</a>
    </form>
@endsection