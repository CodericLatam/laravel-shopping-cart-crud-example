<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar # '.$inventario->id) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('admin.inventario.update', $inventario->id)}}"
                 method="POST" x-data="inventarioForm()">
                    @csrf
                    @method('PUT')
                    <div class="w-full p-6">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Producto') }}
                                </label>
                                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="producto_id" type="text" name="producto_id" x-model="inventarioData.producto_id">
                                    <option>Seleccione una opción</option>
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}" {{ $inventario->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('producto_id')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Inventario') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inventario" type="text" placeholder="Inventario" name="inventario" required autocomplete="inventario" autofocus x-model="inventarioData.inventario">
                                @error('inventario')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Costo') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="costo" type="text" placeholder="Costo" name="costo" required autocomplete="costo" autofocus x-model="inventarioData.costo">
                                @error('costo')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

    function inventarioForm() {
        window.Echo.private(`App.Models.Inventario.{{ $inventario->id }}`)
        .listen('.InventarioUpdated', (e) => {
            console.log(e.model);
            document.getElementById('producto_id').value = e.model.producto_id;
            document.getElementById('inventario').value = e.model.inventario;
            document.getElementById('costo').value = e.model.costo;
            //alert(JSON.stringify(e));
        }).listen('.InventarioDeleted', (e) => {
            location.href = '..';
        });
      return {
        inventarioData: @json($inventario)
      }
    }
    </script>
</x-app-layout>