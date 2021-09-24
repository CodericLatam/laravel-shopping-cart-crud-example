<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="px-2 py-2">#</th>
                            <th class="px-2 py-2">Nombre</th>
                            <th class="px-2 py-2">Unidad</th>
                            <th class="px-2 py-2">Precio</th>
                            <th class="px-2 py-2"></th>
                            <th class="px-2 py-2 text-center">
                                <a href="{{ route('admin.producto.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="productos">
                        @forelse ($productos as $producto)
                        <tr id="AppModelsProducto{{ $producto->id }}"
                        x-data='productoData(@json($producto))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsProducto{{ $producto->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.nombre" id="AppModelsProducto{{ $producto->id }}nombre"></td>
                            <td class="border px-2 py-2" x-text="data.unidad" id="AppModelsProducto{{ $producto->id }}unidad"></td>
                            <td class="border px-2 py-2" x-text="data.precio" id="AppModelsProducto{{ $producto->id }}precio"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('admin.producto.edit', $producto->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.producto.destroy', $producto->id)}}" method="POST">
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
                                <td colspan="6">No hay productos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $productos->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function productoData(producto) {
            window.Echo.private("App.Models.Producto." + producto.id)
            .listen(".ProductoUpdated", (e) => {
                document.getElementById('AppModelsProducto'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsProducto'+e.model.id+'nombre').innerText = e.model.nombre;
                document.getElementById('AppModelsProducto'+e.model.id+'unidad').innerText = e.model.unidad;
                document.getElementById('AppModelsProducto'+e.model.id+'precio').innerText = e.model.precio;
            }).listen('.ProductoDeleted', (e) => {
                document.getElementById('AppModelsProducto'+e.model.id).remove();
            });
            return { data: producto}
        }
    </script>
</x-app-layout>