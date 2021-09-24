<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar # '.$contacto->id) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('admin.contacto.update', $contacto->id)}}"
                 method="POST" x-data="contactoForm()">
                    @csrf
                    @method('PUT')
                    <div class="w-full p-6">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Nombre') }}
                                </label>
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text" placeholder="Nombre" name="nombre" required autocomplete="nombre" autofocus x-model="contactoData.nombre">
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
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefono" type="text" placeholder="Telefono" name="telefono" required autocomplete="telefono" autofocus x-model="contactoData.telefono">
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
                                <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="Email" name="email" required autocomplete="email" autofocus x-model="contactoData.email">
                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    {{ __('Usuario') }}
                                </label>
                                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="user_id" type="text" name="user_id" x-model="contactoData.user_id">
                                    <option>Seleccione una opción</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $contacto->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
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

    function contactoForm() {
        window.Echo.private(`App.Models.Contacto.{{ $contacto->id }}`)
        .listen('.ContactoUpdated', (e) => {
            console.log(e.model);
            document.getElementById('nombre').value = e.model.nombre;
            document.getElementById('telefono').value = e.model.telefono;
            document.getElementById('email').value = e.model.email;
            document.getElementById('user_id').value = e.model.user_id;
            //alert(JSON.stringify(e));
        }).listen('.ContactoDeleted', (e) => {
            location.href = '..';
        });
      return {
        contactoData: @json($contacto)
      }
    }
    </script>
</x-app-layout>