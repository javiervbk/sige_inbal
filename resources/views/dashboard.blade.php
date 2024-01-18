<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <div class="flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/94/Musee_National_Anthropologie-Entree.jpg" alt="Museo Logo" class=" w-20">
            <span class="ms-3">{{ Auth::user()->museo->Nombre }} <br> <small>Director</small></span>
        </div>
        


           
        </h2>
        
    </x-slot>

    <div class="w-full px-3 mb-6 md:mb-0 bg-white">
    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500">
                    <path d="M21 21l-6-6m2-6a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </span>
        <input type="text" class="w-full py-2 pl-10 pr-2 text-sm text-black placeholder-gray-500 border rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Buscar...">
    </div>
</div>
    <div class="py-12 flex sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-1/2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-gray-900 mb-4">Modulo de estadisticas</h1>
                    <div id="container">

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-1/2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Modulo de movimientos</h2>
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Entradas</h3>
                            <ul>
                                <li class="flex justify-between">
                                    <span>Entrada 1</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Entrada 2</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Entrada 3</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Entrada 4</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Entrada 5</span>
                                    <span>10/10/2021</span>
                                </li>
                            </ul>
                        </div>
                        <div class="w-1/2">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Salidas</h3>
                            <ul>
                                <li class="flex justify-between">
                                    <span>Salida 1</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Salida 2</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Salida 3</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Salida 4</span>
                                    <span>10/10/2021</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Salida 5</span>
                                    <span>10/10/2021</span>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Piezas por ubicacion'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo']
        },
        yAxis: {
            title: {
                text: 'Total'
            }
        },
        series: [{
            name: 'Ventas',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Compras',
            data: [3, 4, 4, 2, 5]
        }]
    });

    </script>
</x-app-layout>
