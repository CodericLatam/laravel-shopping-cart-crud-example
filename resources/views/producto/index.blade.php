<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Precio</th>
                            <th class="px-4 py-2">Cantidad</th>
                            <th class="px-4 py-2">Descripción</th>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($productos as $producto)
                        <tr>
                            <td class="border px-4 py-2">{{ $producto->id }}</td>
                            <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                            <td class="border px-4 py-2">{{ $producto->precio }}</td>
                            <td class="border px-4 py-2">{{ $producto->cantidad }}</td>
                            <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                        </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="5">No hay productos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>