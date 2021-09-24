<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventarios') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="px-2 py-2">#</th>
                            <th class="px-2 py-2">Producto</th>
                            <th class="px-2 py-2">inventario</th>
                            <th class="px-2 py-2">costo</th>
                            <th class="px-2 py-2"></th>
                            <th class="px-2 py-2 text-center">
                                <a href="{{ route('admin.inventario.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="inventarios">
                        @forelse ($inventarios as $inventario)
                        <tr id="AppModelsInventario{{ $inventario->id }}"
                        x-data='inventarioData(@json($inventario))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsInventario{{ $inventario->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.producto_id" id="AppModelsInventario{{ $inventario->id }}producto_id"></td>
                            <td class="border px-2 py-2" x-text="data.inventario" id="AppModelsInventario{{ $inventario->id }}inventario"></td>
                            <td class="border px-2 py-2" x-text="data.costo" id="AppModelsInventario{{ $inventario->id }}costo"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('admin.inventario.edit', $inventario->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.inventario.destroy', $inventario->id)}}" method="POST">
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
                                <td colspan="6">No hay inventarios registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $inventarios->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function inventarioData(inventario) {
            window.Echo.private("App.Models.Inventario." + inventario.id)
            .listen(".InventarioUpdated", (e) => {
                document.getElementById('AppModelsInventario'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsInventario'+e.model.id+'producto_id').innerText = e.model.producto_id;
                document.getElementById('AppModelsInventario'+e.model.id+'inventario').innerText = e.model.inventario;
                document.getElementById('AppModelsInventario'+e.model.id+'costo').innerText = e.model.costo;
            }).listen('.InventarioDeleted', (e) => {
                document.getElementById('AppModelsInventario'+e.model.id).remove();
            });
            console.dir(inventario);
            return { data: inventario}
        }
    </script>
</x-app-layout>