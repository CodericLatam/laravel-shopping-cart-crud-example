<x-app-layout>
<x-slot name="header"></x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
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
                            <th class="px-2 py-2">Número fiscal</th>
                            <th class="px-2 py-2">Email</th>
                            <th class="px-2 py-2"></th>
                        </th>
                    </thead>
                    <tbody id="users">
                        @forelse ($users as $user)
                        <tr id="AppModelsUser{{ $user->id }}"
                        x-data='userData(@json($user))' x-cloak>
                            <td class="border px-2 py-2 text-center" x-text="data.id" id="AppModelsUser{{ $user->id }}id"></td>
                            <td class="border px-2 py-2" x-text="data.name" id="AppModelsUser{{ $user->id }}name"></td>
                            <td class="border px-2 py-2" x-text="data.vat" id="AppModelsUser{{ $user->id }}vat"></td>
                            <td class="border px-2 py-2" x-text="data.email" id="AppModelsUser{{ $user->id }}email"></td>
                            <td class="border px-2 py-2 text-center">
                                <form action="{{ route('admin.user.destroy', $user->id)}}" method="POST">
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
                                <td colspan="6">No hay users registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="px-4 py-2 text-right">
                                {{ $users->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        function userData(User) {
            window.Echo.private("App.Models.User." + User.id)
            .listen(".UserUpdated", (e) => {
                document.getElementById('AppModelsUser'+e.model.id+'id').innerText = e.model.id;
                document.getElementById('AppModelsUser'+e.model.id+'name').innerText = e.model.name;
                document.getElementById('AppModelsUser'+e.model.id+'vat').innerText = e.model.vat;
                document.getElementById('AppModelsUser'+e.model.id+'email').innerText = e.model.email;
            }).listen('.UserDeleted', (e) => {
                document.getElementById('AppModelsUser'+e.model.id).remove();
            });
            return { data: User}
        }
    </script>
</x-app-layout>