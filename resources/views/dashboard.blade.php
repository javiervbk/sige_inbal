<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <div class="flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/94/Musee_National_Anthropologie-Entree.jpg" alt="Museo Logo" class=" w-20">
            <span class="ms-3">{{ Auth::user()->museo->Nombre }} <br> <small>Director</small></span>
        </div>

           
        </h2>
    </x-slot>

    <div class="py-12 flex sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-1/2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-gray-900 mb-4">Modulo de estadisticas</h1>
                    
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-1/2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Modulo de movimientos</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
