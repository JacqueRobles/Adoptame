@extends('layouts.app')

@section('content')

<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
      <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
          Petición de adopción
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400">
          Manage your name, password and account settings.
        </p>
      </div>
      
      <form method="POST" action="/pets/{{$pet->id}}/petitions" >
        @csrf
        <!-- Grid -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <p class="text-red-700" ><strong>Whoops!</strong> Hubo algunos problemas con los datos ingresados.<br><br></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- Grid -->
        <input type="hidden" name="pet_id" value="{{ $pet->id}}">
        <input type="hidden" name="status" value="Pendiente">
 
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
          <div class="sm:col-span-3">
            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Foto mascota
            </label>
          </div>
          <!-- End Col -->
  
          <div class="sm:col-span-9">
            <div class="flex items-center gap-5">
              @if (optional($image = $pet->images->first())->path)
                <img class="w-20 h-20 rounded-full object-cover" src="{{Storage::url($image->path)}}" alt="avatar">
              @else
                <!-- Display a default image or a message -->
                <img src="{{ asset('storage/images/pet-default.png') }}" alt="pet image" class="h-20 w-auto rounded-md">
              @endif               
            </div>
          </div>
          <!-- End Col -->
  
          
          
          <div class="sm:col-span-3">
            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Email
            </label>
          </div>
          <!-- End Col -->
  
          <div class="sm:col-span-9">
            <input id="af-account-email" type="email" name="email" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="maria@site.com">
          </div>
          
  
          <div class="sm:col-span-3">
            <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Descripcion
            </label>
            <span class="text-sm text-gray-400 dark:text-gray-600">
              (Optional)
            </span>
          </div>
          <!-- End Col -->
  
          <div class="sm:col-span-9">
            <textarea id="af-account-bio" name="description" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="6" placeholder="Escribe un mensaje para la organizacion..."></textarea>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->
  
        <div class="mt-5 flex justify-end gap-x-2">
          <a  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{route('pet.show', ['2']) }}">
            Cancelar
          </a>
          
          <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Guardar
          </button>
        </div>
      </form>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->

@endsection