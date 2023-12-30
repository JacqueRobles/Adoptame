@extends('layouts.app')

@section('content')
<section class= "text-white">
    <h1>Soy el Index de Organization y debería mostrar todos los datos que hay</h1>
    <hr>
    <p>Se enchula se pone mas bonito bootrap, css grid, etc etc etc</p>
    pero lo que importa es que <strong><b>FUNCIONE</b></strong>
    ACA NO SE PREOCUPEN TANTO DE COMO LO MUESTRO, CADA LP TIENE SU MANERA DIFERENTE DE HACERLO, centrense más que estoy
    enviando datos desde el controlador a la vista para que lo pueda ver el usuario
    <hr>

    <h4>Las organizaciones inscristas en adoptame.cl son:</h4>

    <a href="{{ route('organization.create') }}"><button type="button">Agregar Organizacion</button> </a>

    <table class="table table-bordered">
        <thead>
            <th> Nombre</th>
            <th> Direccion</th>
            <th> Editar</th>
            <th> Eliminar</th>
        </thead>
        @foreach ($organizations as $organization)
            <tr>
                <td>{{ $organization->name }}</td>
                <td>{{ $organization->address }}</td>
                <td><a href="{{ route('organization.edit', $organization->id) }}"><button
                            type="button">Editar</button></a>
                </td>
                <td>
                    <a onclick="confirm('¿Está seguro que desea eliminar la organizacion de adoptame.cl?')">
                        <form action="{{ route('organization.destroy', $organization->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </a>
                </td>
                </form>
            </tr>
        @endforeach
    </table>

</section>
@endsection