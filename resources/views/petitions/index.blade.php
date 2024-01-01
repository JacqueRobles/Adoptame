@extends('layouts.app')

@section('content')

    <!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
            
  
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
              <thead class="bg-gray-50 dark:bg-slate-800">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        Mascota
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        Solicitante
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        Descripcion
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        Fecha
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        Status
                      </span>
                    </div>
                  </th>
                </tr>
              </thead>
              {{-- // Table Body --}}
              <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($petitions as $petition)
                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-4">
                        <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-lg" src="{{$petition->pets->profilePhoto->path}}" alt="Image Description">
                        <div>
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{$petition->pets->nickname}}</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-3">
                        <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full" src="{{$petition->users->profile_photo_path}}" alt="Image Description">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{$petition->users->name}}</span>
                          <span class="block text-sm text-gray-500">{{$petition->users->email}}</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-72 min-w-[18rem] align-top">
                    <a class="block p-6" href="#">
                      <div class="flex gap-x-1 mb-2">
                        {{-- <svg class="flex-shrink-0 w-3 h-3 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg class="flex-shrink-0 w-3 h-3 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg class="flex-shrink-0 w-3 h-3 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg class="flex-shrink-0 w-3 h-3 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg class="flex-shrink-0 w-3 h-3 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg> --}}
                      </div> 
                      <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">I just love it!</span> 
                      <span class="block text-sm text-gray-500">
                        {{$petition->description}}
                    </span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="text-sm text-gray-600 dark:text-gray-400">{{$petition->date}}</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                        @if ($petition->status == 'true')
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                Aprobado
                            </span>
                        @elseif ($petition->status == 'false')
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                                Denegado
                            </span>
                        @else
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V3.5A.5.5 0 0 1 8 3zm0 8a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-1 0v-.5a.5.5 0 0 1 .5-.5zm7-8.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM2 3.5h1a.5.5 0 0 1 0 1H2a.5.5 0 0 1 0-1zm12 9h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM2 12.5h1a.5.5 0 0 1 0 1H2a.5.5 0 0 1 0-1zM8 0a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 8 0zm7 7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V7.5A.5.5 0 0 1 15 7zm-14 0a.5.5
                                0 0 1 .5.5v1a.5.5 0 0 1-1 0V7.5A.5.5 0 0 1 1 7zm14 7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-.5a.5.5 0 0 1 .5-.5zM1 14.5h1a.5.5 0 0 1 0 1H1a.5.5 0 0 1 0-1z"/>
                                </svg>
                                Pendiente
                            </span>
                        @endif
                      
                    </a>
                  </td>
                </tr>
                @endforeach
                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-4">
                        <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-lg" src="https://images.unsplash.com/photo-1523381294911-8d3cead13475?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Image Description">
                        <div>
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Calvin Klein T-shirts</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-3">
                        <img class="inline-block h-[1.800rem] w-[1.800rem] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">David Harrison</span>
                          <span class="block text-sm text-gray-500">david@site.com</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-72 min-w-[18rem] align-top">
                    <a class="block p-6" href="#">
                      
                      <span class="block text-sm text-gray-500">Material is great and very comfortable and stylish.</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="text-sm text-gray-600 dark:text-gray-400">04 Aug 2020</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V3.5A.5.5 0 0 1 8 3zm0 8a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-1 0v-.5a.5.5 0 0 1 .5-.5zm7-8.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM2 3.5h1a.5.5 0 0 1 0 1H2a.5.5 0 0 1 0-1zm12 9h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM2 12.5h1a.5.5 0 0 1 0 1H2a.5.5 0 0 1 0-1zM8 0a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 8 0zm7 7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V7.5A.5.5 0 0 1 15 7zm-14 0a.5.5
                            0 0 1 .5.5v1a.5.5 0 0 1-1 0V7.5A.5.5 0 0 1 1 7zm14 7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-.5a.5.5 0 0 1 .5-.5zM1 14.5h1a.5.5 0 0 1 0 1H1a.5.5 0 0 1 0-1z"/>
                            </svg>
                            Pendiente
                        </span>
                    </a>
                  </td>
                </tr>
  
                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-4">
                        <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-lg" src="https://images.unsplash.com/photo-1626947346165-4c2288dadc2a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Image Description">
                        <div>
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Clarks shoes</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-3">
                        <span class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-gray-300 dark:bg-gray-700">
                          <span class="font-medium text-gray-800 leading-none dark:text-gray-200">A</span>
                        </span>
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Anne Richard</span>
                          <span class="block text-sm text-gray-500">anne@site.com</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-72 min-w-[18rem] align-top">
                    <a class="block p-6" href="#">
                      
                      <span class="block text-sm text-gray-500">A really well built shoe. It looks great and wears just as well. A great staple in ball caps.</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="text-sm text-gray-600 dark:text-gray-400">June 18 2022</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                        <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        Published
                      </span>
                    </a>
                  </td>
                </tr>
  
                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-4">
                        <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-lg" src="https://images.unsplash.com/photo-1598554747436-c9293d6a588f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Image Description">
                        <div>
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Levis women's jeans</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-3">
                        <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full" src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80" alt="Image Description">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Samia Kartoon</span>
                          <span class="block text-sm text-gray-500">samia@site.com</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-72 min-w-[18rem] align-top">
                    <a class="block p-6" href="#">
                      
                      <span class="block text-sm text-gray-500">Don't let this merchandise get away! It's a must buy and you will look good in it while working out.</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="text-sm text-gray-600 dark:text-gray-400">10 Jan 2022</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                        <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        Published
                      </span>
                    </a>
                  </td>
                </tr>
  
                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-4">
                        <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-lg" src="https://images.unsplash.com/photo-1594032194509-0056023973b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Image Description">
                        <div>
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Asos T-shirts</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <div class="flex items-center gap-x-3">
                        <span class="inline-flex items-center justify-center h-[2.375rem] w-[2.375rem] rounded-full bg-gray-300 dark:bg-gray-700">
                          <span class="font-medium text-gray-800 leading-none dark:text-gray-200">D</span>
                        </span>
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">David Harrison</span>
                          <span class="block text-sm text-gray-500">david@site.com</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="h-px w-72 min-w-[18rem] align-top">
                    <a class="block p-6" href="#">
                      
                      <span class="block text-sm text-gray-500">As good as the heat Rdy T-shirt but without the sleeves. Love the stripes on the back.</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="text-sm text-gray-600 dark:text-gray-400">07 May 2022</span>
                    </a>
                  </td>
                  <td class="h-px w-px whitespace-nowrap align-top">
                    <a class="block p-6" href="#">
                      <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                        <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        Published
                      </span>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table -->
  
            <!-- Footer -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
              <div class="max-w-sm space-y-3">
                <select class="py-2 px-3 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option selected>5</option>
                  <option>6</option>
                </select>
              </div>
  
              <div>
                <div class="inline-flex gap-x-2">
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                    Prev
                  </button>
  
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Next
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->



@endsection