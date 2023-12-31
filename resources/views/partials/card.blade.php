
<div class="flex-none w-64 bg-white shadow-lg rounded-lg overflow-hidden">

<a class=" block w-full group flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
    <div class="aspect-w-16 aspect-h-11">
      <img class="w-full object-cover rounded-xl" src="{{ $pet->image->path }}" alt="Image Description">
    </div>
    <div class="my-6">
      <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
        {{ $pet->name }}
      </h3>
      <p class="mt-5 text-gray-600 dark:text-gray-400">
        {{ $pet->description }}
      </p>
    </div>
    <div class="mt-auto flex items-center gap-x-3">
      <img class="w-8 h-8 rounded-full" src="{{ $pet->user->profile_photo_path }}" alt="Image Description">
      <div>
        <h5 class="text-sm text-gray-800 dark:text-gray-200">{{ $pet->user->name }}</h5>
      </div>
    </div>
  </a>

</div>