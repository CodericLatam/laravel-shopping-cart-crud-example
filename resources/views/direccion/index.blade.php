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
                            <th class="px-4 py-2">Contacto ID</th>
                            <th class="px-4 py-2">Direccion</th>
                            <th class="px-4 py-2">Localidad</th>
                            <th class="px-4 py-2">Ciudad</th>
                            <th class="px-4 py-2">Distrito</th>
                            <th class="px-4 py-2">Pais</th>
                            <th class="px-4 py-2">
                                <a href="{{ route('panel.direccions.create')}}">
                                <i class="fas fa-plus-square"></i>
                                </a>
                            </th>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($direccions as $direccion)
                        <tr>
                            <td class="border px-4 py-2">{{ $direccion->id }}</td>
                            <td class="border px-4 py-2">{{ $direccion->contacto_id }}</td>
                            <td class="border px-4 py-2">{{ $direccion->direccion }}</td>
                            <td class="border px-4 py-2">{{ $direccion->localidad }}</td>
                            <td class="border px-4 py-2">{{ $direccion->ciudad }}</td>
                            <td class="border px-4 py-2">{{ $direccion->distrito }}</td>
                            <td class="border px-4 py-2">{{ $direccion->pais }}</td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('panel.direccions.edit', $direccion->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('panel.direccions.destroy', $direccion->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="6">No hay direcciones registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="border px-4 py-2" colspan="6">
                                {{ $direccions->links() }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>