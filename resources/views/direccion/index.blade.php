<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Direcciones') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Direccion</th>
                            <th class="px-4 py-2">Localidad</th>
                            <th class="px-4 py-2">Ciudad</th>
                            <th class="px-4 py-2">Distrito</th>
                            <th class="px-4 py-2">Pais</th>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($direccions as $direccion)
                        <tr>
                            <td class="border px-4 py-2">{{ $direccion->id }}</td>
                            <td class="border px-4 py-2">{{ $direccion->direccion }}</td>
                            <td class="border px-4 py-2">{{ $direccion->localidad }}</td>
                            <td class="border px-4 py-2">{{ $direccion->ciudad }}</td>
                            <td class="border px-4 py-2">{{ $direccion->distrito }}</td>
                            <td class="border px-4 py-2">{{ $direccion->pais }}</td>
                        </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="5">No hay direcciones registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $direccions->links() }}
            </div>
        </div>
    </div>


</x-app-layout>