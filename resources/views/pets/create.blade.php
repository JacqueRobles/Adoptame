
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
              
              <form method="POST" action="{{route('pet.store')}}" enctype="multipart/form-data">
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
                      <img id="preview" class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800" src="../assets/img/160x160/img1.jpg" alt="Image Description">
                      <div class="flex gap-x-2">
                        <div>
                          <input type="file" id="profile-photo" name="profile_photo_path" style="display: none;"  onchange="previewFile()" />

                          <button type="button" onclick="document.getElementById('profile-photo').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                            Upload photo
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <script>
                    function previewFile() {
                        var preview = document.getElementById('preview');
                        var file    = document.getElementById('profile-photo').files[0];
                        var reader  = new FileReader();
                    
                        reader.onloadend = function () {
                            preview.src = reader.result;
                        }
                    
                        if (file) {
                            reader.readAsDataURL(file);
                        } else {
                            preview.src = "";
                        }
                    }
                    </script>
                  <!-- End Col -->
          
                  <div class="sm:col-span-3">
                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Nombre de la mascota
                    </label>
                  </div>
                  {{-- end col --}}
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Firulais"
                      name="nickname">
                    </div>
                  </div>
                  <!-- End Col -->

                    {{-- <div class="space-y-2">
                        <label for="af-submit-app-category" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                            Organizacion
                          </label>
                        <select id="af-submit-app-category" class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                        @foreach ($organizations as $organization)
                            <option value="{{$organization->id}}">{{$organization->name}}</option>
                        @endforeach
                        </select>
                    </div> --}}
                    {{-- ???? como ????? --}}
                {{-- end col --}}
                  
                    <div class="sm:col-span-3">
                      <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Categoria
                      </label>
                    </div>
                    <div class="sm:col-span-9">
                      <div class="sm:flex">
                        <select id="af-submit-app-category" name="type" class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" name="type">
                          <option selected  >Perro</option>
                          <option>Gato</option>
                          <option>Ave</option>
                          <option>Roedor</option>
                          <option>Lagarto</option>
                            <option>Otro</option>
                        </select>
                      </div>
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
                      <input id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Estatura pequeña"
                      name="feature">
                    </div>
                  </div>
                  <!-- End Col -->

                  

                  
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
                    <textarea id="af-account-bio" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="6" placeholder="Escribe un mensaje para la organizacion..." name="biography"></textarea>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                      Imagenes para Galeria
                    </label>
                    <div class="hs-tooltip inline-block">
                      <button type="button" class="hs-tooltip-toggle ms-1">
                        <svg class="inline-block w-3 h-3 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                      </button>
                      <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-slate-700" role="tooltip">
                        Si quiere subir más de una imagen, mantenga presionada la tecla Ctrl mientras selecciona las imágenes.
                      </span>
                    </div>
                  
                    <div class="sm:col-span-9">
                      <span class="text-sm text-gray-400 dark:text-gray-600">
                      (Optional)
                      
                      </span>
                    </div>
                  </div>
                  <!-- End Col -->
                  
                  <div class="sm:col-span-9">
                    <label for="images-pet" class="sr-only">Choose file</label>
                    <input type="file" name="images[]" id="images-pet" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                      file:bg-transparent file:border-0
                      file:bg-gray-100 file:me-4
                      file:py-2 file:px-3
                      dark:file:bg-gray-700 dark:file:text-gray-400" multiple>
                  </div>
                  {{-- end col --}}
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