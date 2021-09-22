<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contactos') }}
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
                            <th class="px-2 py-2">Telefono</th>
                            <th class="px-2 py-2">Email</th>
                            <th class="px-2 py-2"></th>
                            <th class="px-2 py-2 text-center">
                                <a href="{{ route('panel.contactos.create')}}"><i class="fas fa-plus-square"></i></a>
                            </th>
                        </th>
                    </thead>
                    <tbody id="contactos">
                        @forelse ($contactos as $contacto)
                        <tr id="AppModelsContacto{{ $contacto->id }}"
                        x-data='contactoData(@json($contacto))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsContacto{{ $contacto->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.nombre" id="AppModelsContacto{{ $contacto->id }}nombre"></td>
                            <td class="border px-2 py-2" x-text="data.telefono" id="AppModelsContacto{{ $contacto->id }}telefono"></td>
                            <td class="border px-2 py-2" x-text="data.email" id="AppModelsContacto{{ $contacto->id }}email"></td>
                            <td class="border px-2 py-2 text-center"><a href="{{ route('panel.contactos.edit', $contacto->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('panel.contactos.destroy', $contacto->id)}}" method="POST">
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
                                <td colspan="6">No hay contactos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $contactos->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function contactoData(contacto) {
            window.Echo.private("App.Models.Contacto." + contacto.id)
            .listen(".ContactoUpdated", (e) => {
                document.getElementById('AppModelsContacto'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsContacto'+e.model.id+'nombre').innerText = e.model.nombre;
                document.getElementById('AppModelsContacto'+e.model.id+'telefono').innerText = e.model.telefono;
                document.getElementById('AppModelsContacto'+e.model.id+'email').innerText = e.model.email;
            }).listen('.ContactoDeleted', (e) => {
                document.getElementById('AppModelsContacto'+e.model.id).remove();
            });
            return { data: contacto}
        }
    </script>
</x-app-layout>