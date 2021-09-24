<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Envios') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="px-2 py-2">#</th>
                            <th class="px-2 py-2">Cliente</th>
                            <th class="px-2 py-2">Precio</th>
                            <th class="px-2 py-2">Costo_envio</th>
                            <th class="px-2 py-2">Descuento</th>
                            <th class="px-2 py-2">Total</th>
                            <th class="px-2 py-2"></th>
                            <th class="px-2 py-2 text-center">
                                <a href="{{ route('admin.envio.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="envios">
                        @forelse ($envios as $envio)
                        <tr id="AppModelsEnvio{{ $envio->id }}"
                        x-data='envioData(@json($envio))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsEnvio{{ $envio->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.user_id" id="AppModelsEnvio{{ $envio->id }}user_id"></td>
                            <td class="border px-2 py-2" x-text="data.precio" id="AppModelsEnvio{{ $envio->id }}precio"></td>
                            <td class="border px-2 py-2" x-text="data.costo_envio" id="AppModelsEnvio{{ $envio->id }}costo_envio"></td>
                            <td class="border px-2 py-2" x-text="data.descuento" id="AppModelsEnvio{{ $envio->id }}descuento"></td>
                            <td class="border px-2 py-2" x-text="data.total" id="AppModelsEnvio{{ $envio->id }}total"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('admin.envio.edit', $envio->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.envio.destroy', $envio->id)}}" method="POST">
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
                                <td colspan="6">No hay envios registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $envios->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function envioData(envio) {
            window.Echo.private("App.Models.Envio." + envio.id)
            .listen(".EnvioUpdated", (e) => {
                document.getElementById('AppModelsEnvio'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsEnvio'+e.model.id+'user_id').innerText = e.model.user_id;
                document.getElementById('AppModelsEnvio'+e.model.id+'envio_tipo_id').innerText = e.model.envio_tipo_id;
                document.getElementById('AppModelsEnvio'+e.model.id+'pago_tipo_id').innerText = e.model.pago_tipo_id;
                document.getElementById('AppModelsEnvio'+e.model.id+'envio_direccion').innerText = e.model.envio_direccion;
                document.getElementById('AppModelsEnvio'+e.model.id+'pago_direccion').innerText = e.model.pago_direccion;
                document.getElementById('AppModelsEnvio'+e.model.id+'precio').innerText = e.model.precio;
                document.getElementById('AppModelsEnvio'+e.model.id+'costo_envio').innerText = e.model.costo_envio;
                document.getElementById('AppModelsEnvio'+e.model.id+'descuento').innerText = e.model.descuento;
                document.getElementById('AppModelsEnvio'+e.model.id+'total').innerText = e.model.total;
            }).listen('.EnvioDeleted', (e) => {
                document.getElementById('AppModelsEnvio'+e.model.id).remove();
            });
            return { data: envio}
        }
    </script>
</x-app-layout>