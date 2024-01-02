@extends('layouts.app')
@section('content')
<section class="min-w-screen min-h-screen h-fit flex justify-center text-white">
    <div class="w-5/6 shadow-xl h-full flex flex-col items-center p-5">
        <h1 class="font-medium text-xl mb-5">Usuarios</h1>
        @foreach($users as $usuario)
            <x-user-card :user="$usuario" />
        @endforeach
        {{ $users->links() }}
</section>
@endsection