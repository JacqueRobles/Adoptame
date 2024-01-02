<!-- resources/views/components/user-card.blade.php -->

<div class="w-4/6 bg-white shadow-lg rounded-lg overflow-hidden mb-4 text-black">
    <div class="px-4 py-2">
        <h1 class="font-bold text-2xl mb-2">Nombre: {{$user->name}}</h1>
    </div>
    <div class="grid grid-cols-2 divide-x divide-gray-200">
        <div class="px-4 py-2">
            <p class="font-bold text-lg">Correo:</p>
            <p class="text-gray-700">{{$user->email}}</p>
        </div>
    </div>
    <div class="px-4 py-2">
        <p class="font-bold text-lg">Tipo:</p>
        <p class="text-gray-700">{{$user->getRoleNames()[0] ?? 'Sin rol'}}</p>
    </div>
    @if($user->getRoleNames()->isEmpty())
    <div>
        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-slide-down-animation-modal">
            Activar como organización
        </button>

        <div id="hs-slide-down-animation-modal" class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                        Organización
                        </h3>
                        <button type="button" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-slide-down-animation-modal">
                        <span class="sr-only">Cerrar</span>
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                        </button>
                    </div>
                    <div class="p-4 overflow-y-auto">
                        <p class="mt-1 text-gray-800 dark:text-gray-400">
                        Seguro que quieres dar el rol de organización a {{$user->name}}?
                        </p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-slide-down-animation-modal">
                        Cancelar
                        </button>
                        <form action="{{route('admin.updateUserStatus', ['id' => $user->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <input type="text" name="commune_name" placeholder="Comuna"/>
                            <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 cursor-pointer">
                                Activar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>