<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contactos') }}
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
                            <th class="px-4 py-2">Telefono</th>
                            <th class="px-4 py-2">Email</th>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($contactos as $contacto)
                        <tr>
                            <td class="border px-4 py-2">{{ $contacto->id }}</td>
                            <td class="border px-4 py-2">{{ $contacto->nombre }}</td>
                            <td class="border px-4 py-2">{{ $contacto->telefono }}</td>
                            <td class="border px-4 py-2">{{ $contacto->email }}</td>
                        </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">No hay contactos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>