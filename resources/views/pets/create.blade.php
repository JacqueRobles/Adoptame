{{-- @extends('layouts.app')

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
        </select> --}}
        @extends('layouts.app')

        @section('content')
        
        <!-- Card Section -->
        <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
              <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
                  Nueva mascota
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Ingrese los datos de la mascota que desea dar en adopción.
                </p>
              </div>
              
              <form action="{{route('pet.store')}}" method="POST" enctype="multipart/form-data">
                <!-- Grid -->
                {{-- <input type="hidden" name="organization_id" value="{{ $id }}"> --}}
        
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                  <div class="sm:col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Foto mascota
                    </label>
                  </div>

                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="flex items-center gap-5">
                      <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800" src="../assets/img/160x160/img1.jpg" alt="Image Description">
                      <div class="flex gap-x-2">
                        <div>
                            <input type="file" id="profile-photo" name="profile_photo_path" style="display: none;" />

                          <button type="button" onclick="document.getElementById('profile-photo').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                            Upload photo
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Col -->
          
                  <div class="sm:col-span-3">
                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Nombre de la mascota
                    </label>
                  </div>
                  {{-- end col --}}
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Maria">
                    </div>
                  </div>
                  <!-- End Col -->

                    <div class="space-y-2">
                        <label for="af-submit-app-category" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                            Organizacion
                          </label>
                        <select id="af-submit-app-category" class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                        @foreach ($organizations as $organization)
                            <option value="{{$organization->id}}">{{$organization->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    {{-- ???? como ????? --}}
                {{-- end col --}}
                  <div class="space-y-2">
                    <label for="af-submit-app-category" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                      Categoria         
                    </label>
        
                    <select id="af-submit-app-category" class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <option selected>Select a category</option>
                      <option>Perro</option>
                      <option>Gato</option>
                      <option>Ave</option>
                      <option>Roedor</option>
                      <option>Lagarto</option>
                        <option>Otro</option>
                    </select>
                  </div>
                  {{-- end col --}}
          
                  <div class="sm:col-span-3">
                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Caracteristicas
                    </label>
                  </div>
                  {{-- end col --}}
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Maria">
                    </div>
                  </div>
                  {{-- end col--}}
          
                  <div class="sm:col-span-3">
                    <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Biografía
                    </label>
                    <span class="text-sm text-gray-400 dark:text-gray-600">
                      (Optional)
                    </span>
                  </div>
                  <!-- End Col -->
          
                  <div class="sm:col-span-9">
                    <textarea id="af-account-bio" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="6" placeholder="Escribe un mensaje para la organizacion..."></textarea>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Imagenes para Galeria
                    </label>
                    <span class="text-sm text-gray-400 dark:text-gray-600">
                      (Optional)
                    </span>
                  </div>
                  <!-- End Col -->
                  
                  <div class="sm:col-span-9">
                    <label for="images-pet" class="sr-only">Choose file</label>
                    <input type="file" name="images[]" id="images-pet" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                      file:bg-transparent file:border-0
                      file:bg-gray-100 file:me-4
                      file:py-2 file:px-3
                      dark:file:bg-gray-700 dark:file:text-gray-400">
                  </div>
                  {{-- end col --}}
                </div>
                <!-- End Grid -->
          
                <div class="mt-5 flex justify-end gap-x-2">
                  <a  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{route('pet.show', ['2']) }}">
                    Cancelar
                  </a>
                  
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Guardar
                  </button>
                </div>
              </form>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Card Section -->
        
        @endsection