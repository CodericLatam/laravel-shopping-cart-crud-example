<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar # '.$direccion->id) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('panel.direccions.update', $direccion->id)}}"
                 method="POST" x-data="direccionForm()">
                    @csrf
                    @method('PUT')
                    <div class="w-full p-6">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Nombre') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text" placeholder="Nombre" name="nombre" required autocomplete="nombre" autofocus x-model="direccionData.nombre">
                                @error('nombre')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Telefono') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefono" type="text" placeholder="Telefono" name="telefono" required autocomplete="telefono" autofocus x-model="direccionData.telefono">
                                @error('telefono')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Email') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="Email" name="email" required autocomplete="email" autofocus x-model="direccionData.email">
                                @error('email')
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

    function direccionForm() {
/*
    window.Echo.channel(`direccion.{{ $direccion->id }}`)
    .listen('.updated', (e) => {
        console.dir(e);
    })
    .listen('.deleted', (e) => {
        //location.href = '/panel/direccions';
        console.dir(e);
    });*/

      return {
        direccionData: @json($direccion)
      }
    }
    </script>
</x-app-layout>