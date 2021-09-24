<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagos') }}
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
                                <a href="{{ route('admin.pago.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="pagos">
                        @forelse ($pagos as $pago)
                        <tr id="AppModelsPago{{ $pago->id }}"
                        x-data='pagoData(@json($pago))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsPago{{ $pago->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.descripcion" id="AppModelsPago{{ $pago->id }}descripcion"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('admin.pago.edit', $pago->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.pago.destroy', $pago->id)}}" method="POST">
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
                                <td colspan="6">No hay pagos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $pagos->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function pagoData(pago) {
            window.Echo.private("App.Models.Pago." + pago.id)
            .listen(".PagoUpdated", (e) => {
                document.getElementById('AppModelsPago'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsPago'+e.model.id+'descripcion').innerText = e.model.descripcion;
            }).listen('.PagoDeleted', (e) => {
                document.getElementById('AppModelsPago'+e.model.id).remove();
            });
            return { data: pago}
        }
    </script>
</x-app-layout>