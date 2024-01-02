<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-3">
    <!-- Grid -->
    <div class="grid lg:grid-cols-2 gap-6">
    <!-- Card -->
    @foreach ($organizations as $organization)
          
      <a class="bg-slate-800 p-5 group sm:flex rounded-xl dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 text-black" href="{{route('organization.show', $organization->id) }}">
          <div class="items-center justify-center flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[200px] sm:w-auto sm:h-full">
              @if($image = optional($organization->images)->path))
                  <img class="h-[2.875rem] w-[2.875rem] rounded-full" src="{{ Storage::url($image->path) }}" alt="Org Image">
                @else
                  <!-- Display a default image or a message -->
                  <img src="{{ asset('storage/images/pet-default.png') }}" alt="pet image" class="h-60 w-60 rounded-full"">
              @endif
              {{-- @if(optional($pet->organization->images)->path)                           --}}
          </div>
            
            <div class="grow">
                <div class="p-4 flex flex-col h-full sm:p-6">
                    <div class="mb-3">
                        @if($organization->commune)
                            <p class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-200">
                                {{$organization->commune->commune_name}}
                            </p>
                        @endif
                    </div>
                    <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 group-hover:text-blue-600 dark:text-gray-300 dark:group-hover:text-white">
                        {{ $organization->name }}
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400 text-wrap">
                        {{ $organization->address }}
                    </p>
                    
                    <div class="mt-5 sm:mt-auto">
                <!-- Avatar -->
                      <div class="flex items-center">
                        {{-- <div class="flex-shrink-0">
                          @if(optional($pet->organization->images)->path)

                            <img class="h-[2.875rem] w-[2.875rem] rounded-full" src="{{($pet->organization->images)->path}}" alt="Image Description">
                          @else
                            <!-- Display a default image or a message -->
                            <img src="{{ asset('storage/images/pet-default.png') }}" alt="pet image" class="h-[2.875rem] w-[2.875rem] rounded-full"">
                          @endif 
                        
                        </div> --}}
                        <div class="ms-2.5 sm:ms-4">
                          <h4 class="font-semibold text-gray-800 dark:text-gray-200">
                            {{$organization->phone}}
                          </h4>
                          <p class="text-xs text-gray-500">
                            Feb 15, 2021
                          </p>
                        </div>
                      </div>
                        <!-- End Avatar -->
                    </div>
                </div>
              </div>
            </a>
          <!-- End Card -->
          
          @endforeach
        </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Blog -->