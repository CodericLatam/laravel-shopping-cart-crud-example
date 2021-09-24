<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar # '.$producto->id) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('admin.producto.update', $producto->id)}}"
                 method="POST" x-data="productoForm()" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="w-full p-6">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Nombre') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text" placeholder="Nombre" name="nombre" required autocomplete="nombre" autofocus x-model="productoData.nombre">
                                @error('nombre')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Foto') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="foto" type="file" placeholder="Foto" name="foto" autocomplete="foto" autofocus>
                                @error('foto')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Descripción') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="descripcion" type="text" placeholder="Descripción" name="descripcion" required autocomplete="descripcion" autofocus x-model="productoData.descripcion">
                                @error('descripcion')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Unidad') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="unidad" type="number" step="1.00" placeholder="Unidad" name="unidad" required autocomplete="unidad" autofocus x-model="productoData.unidad">
                                @error('unidad')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Precio') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="precio" type="number" step="1.00" placeholder="Precio" name="precio" required autocomplete="precio" autofocus x-model="productoData.precio">
                                @error('precio')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Producto Tipo') }}
                                </label>
                                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="producto_tipo_id" type="text" placeholder="Producto Tipo Id" name="producto_tipo_id" autocomplete="producto_tipo_id" autofocus x-model="productoData.producto_tipo_id">
                                    <option>Seleccione una opción</option>
                                    @foreach ($producto_tipos as $producto_tipo)
                                        <option value="{{ $producto_tipo->id }}" {{ $producto->producto_tipo_id == $producto_tipo->id ? 'selected' : '' }}>{{ $producto_tipo->descripcion }}</option>
                                    @endforeach
                                </select>
                                @error('producto_tipo_id')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3 py-3">
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

    function productoForm() {
        window.Echo.private(`App.Models.Producto.{{ $producto->id }}`)
        .listen('.ProductoUpdated', (e) => {
            console.log(e.model);
            document.getElementById('nombre').value = e.model.nombre;
            document.getElementById('descripcion').value = e.model.descripcion;
            document.getElementById('unidad').value = e.model.unidad;
            document.getElementById('precio').value = e.model.precio;
            document.getElementById('producto_tipo_id').value = e.model.producto_tipo_id;
            //alert(JSON.stringify(e));
        }).listen('.ProductoDeleted', (e) => {
            location.href = '..';
        });
      return {
        productoData: @json($producto)
      }
    }
    </script>
</x-app-layout>