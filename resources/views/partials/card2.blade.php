<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid lg:grid-cols-2 gap-6">
      <!-- Card -->
      @foreach ($pets as $pet)
          
      <a class="group sm:flex rounded-xl dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{route('pet.show', ['id' => $pet->id]) }}">
          <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[200px] sm:w-[250px] sm:h-[350px]">
              @if($image = $pet->images->first())
                  <img src="{{ Storage::url($image->path) }}" alt="Pet Image">
              @endif
            </div>
            
            <div class="grow">
                <div class="p-4 flex flex-col h-full sm:p-6">
                    <div class="mb-3">
                        <p class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-200">
                            {{$pet->type}}
                        </p>
                    </div>
                    <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 group-hover:text-blue-600 dark:text-gray-300 dark:group-hover:text-white">
                        {{ $pet->name }}
            </h3>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
                {{ $pet->description }}
            </p>
            
            <div class="mt-5 sm:mt-auto">
                <!-- Avatar -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-[2.875rem] w-[2.875rem] rounded-full" src="https://cdn.discordapp.com/attachments/1125559005943697469/1179465142891720724/IMG-20231129-WA0036.jpg?ex=6579e183&is=65676c83&hm=c1481ff8b3906ae234d8bc7d822e514df96900c506dbe9576415590ec866c2d6&" alt="Image Description">
                    </div>
                    <div class="ms-2.5 sm:ms-4">
                  <h4 class="font-semibold text-gray-800 dark:text-gray-200">
                    {{$pet->organization->name}}
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

<!-- Card -->
<a class="group sm:flex rounded-xl dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{route('pet.show', ['id' => $pet->id]) }}">
  <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[200px] sm:w-[250px] sm:h-[350px]">
    <img class="w-full h-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1669824774762-65ddf29bee56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="Image Description">
  </div>
  <div class="grow">
    <div class="p-4 flex flex-col h-full sm:p-6">
      <div class="mb-3">
        <p class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-200">
          Perro
        </p>
      </div>
      <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 group-hover:text-blue-600 dark:text-gray-300 dark:group-hover:text-white">
        Teemo
      </h3>
      <p class="mt-2 text-gray-600 dark:text-gray-400">
        soy callejero, adoptame c:.
      </p>
      
      <div class="mt-5 sm:mt-auto">
        <!-- Avatar -->
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <img class="h-[2.875rem] w-[2.875rem] rounded-full" src="https://images.unsplash.com/photo-1669720229052-89cda125fc3f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                </div>
                <div class="ms-2.5 sm:ms-4">
                  <h4 class="font-semibold text-gray-800 dark:text-gray-200">
                    Patitas del desierto
                  </h4>
                  <p class="text-xs text-gray-500">
                    Feb 4, 2021
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