@extends('layouts.app')
@section('content')
<section class="min-w-screen min-h-screen flex justify-center items-center h-screen text-white py-5">
    <div class="w-5/6 h-full flex flex-col ">
        <div class="p-5 h-1/6">

            <h1 class="text-2xl">Organizaciones Participantes</h1>
            <br>
            {{-- @role('organization|admin')
            <a class="cursor-pointer mt-5 py-3 px-4 w-1/6 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('organization.create') }}">
                <button type="button" class="">Agregar Organizacion</button> </a>
                
            @endrole  --}}
                    
        </div>
        <!-- aca le puse h fit para que no se viera el espacio, despues le pones h-2/6 o algo asi-->
        <div class="mt-5 h-fit">
            @include('partials.card-organization', $organizations)

        </div>
    </div>
</section>
        @endsection