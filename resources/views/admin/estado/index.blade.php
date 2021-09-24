<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estados') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="px-2 py-2">#</th>
                            <th class="px-2 py-2">Descripción</th>
                            <th class="px-2 py-2"></th>
                            <th class="px-2 py-2 text-center">
                                <a href="{{ route('admin.estado.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="estados">
                        @forelse ($estados as $estado)
                        <tr id="AppModelsEstado{{ $estado->id }}"
                        x-data='estadoData(@json($estado))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsEstado{{ $estado->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.descripcion" id="AppModelsEstado{{ $estado->id }}descripcion"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('admin.estado.edit', $estado->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.estado.destroy', $estado->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <template>
                        </template>
                        @empty
                            <tr class="px-4 py-2 text-center">
                                <td colspan="6">No hay estados registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $estados->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function estadoData(estado) {
            window.Echo.private("App.Models.Estado." + estado.id)
            .listen(".EstadoUpdated", (e) => {
                document.getElementById('AppModelsEstado'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsEstado'+e.model.id+'descripcion').innerText = e.model.descripcion;
            }).listen('.EstadoDeleted', (e) => {
                document.getElementById('AppModelsEstado'+e.model.id).remove();
            });
            return { data: estado}
        }
    </script>
</x-app-layout>