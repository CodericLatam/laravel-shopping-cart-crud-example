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
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="px-2 py-2">#</th>
                            <th class="px-2 py-2">Cliente</th>
                            <th class="px-2 py-2">Dirección</th>
                            <th class="px-2 py-2"></th>
                            <th class="px-2 py-2 text-center">
                                <a href="{{ route('admin.direccion.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="direccions">
                        @forelse ($direccions as $direccion)
                        <tr id="AppModelsDireccion{{ $direccion->id }}"
                        x-data='direccionData(@json($direccion))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsDireccion{{ $direccion->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.user_id" id="AppModelsDireccion{{ $direccion->id }}user_id"></td>
                            <td class="border px-2 py-2" x-text="data.direccion" id="AppModelsDireccion{{ $direccion->id }}direccion"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('admin.direccion.edit', $direccion->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.direccion.destroy', $direccion->id)}}" method="POST">
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
                                <td colspan="6">No hay direccions registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $direccions->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function direccionData(direccion) {
            window.Echo.private("App.Models.Direccion." + direccion.id)
            .listen(".DireccionUpdated", (e) => {
                document.getElementById('AppModelsDireccion'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsDireccion'+e.model.id+'user_id').innerText = e.model.user_id;
                document.getElementById('AppModelsDireccion'+e.model.id+'direccion').innerText = e.model.direccion;
            }).listen('.DireccionDeleted', (e) => {
                document.getElementById('AppModelsDireccion'+e.model.id).remove();
            });
            return { data: direccion}
        }
    </script>
</x-app-layout>