<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar # '.$pago->id) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('admin.pago.update', $pago->id)}}"
                 method="POST" x-data="pagoForm()">
                    @csrf
                    @method('PUT')
                    <div class="w-full p-6">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Descripción') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="descripcion" type="text" placeholder="Descripción" name="descripcion" required autocomplete="descripcion" autofocus x-model="pagoData.descripcion">
                                @error('descripcion')
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

    function pagoForm() {
        window.Echo.private(`App.Models.Pago.{{ $pago->id }}`)
        .listen('.PagoUpdated', (e) => {
            console.log(e.model);
            document.getElementById('descripcion').value = e.model.descripcion;
            //alert(JSON.stringify(e));
        }).listen('.PagoDeleted', (e) => {
            location.href = '..';
        });
      return {
        pagoData: @json($pago)
      }
    }
    </script>
</x-app-layout>