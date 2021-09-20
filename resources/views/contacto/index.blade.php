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
                @if($message=Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    <strong class="font-bold text-xl mr-2">Excelente!</strong>
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                </div>
                @endif
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Telefono</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2"><a href="{{ route('panel.contactos.create')}}"><i class="fas fa-plus-square"></i></a></th>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($contactos as $contacto)
                        <tr>
                            <td class="border px-4 py-2">{{ $contacto->id }}</td>
                            <td class="border px-4 py-2">{{ $contacto->nombre }}</td>
                            <td class="border px-4 py-2">{{ $contacto->telefono }}</td>
                            <td class="border px-4 py-2">{{ $contacto->email }}</td>
                            <td class="border px-4 py-2"><a href="{{ route('panel.contactos.edit', $contacto->id)}}"><i class="fas fa-edit"></i></a></th>
                            <td class="border px-4 py-2">
                                <form action="{{ route('panel.contactos.destroy', $contacto->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">No hay contactos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $contactos->links() }}
            </div>
        </div>
    </div>

</x-app-layout>