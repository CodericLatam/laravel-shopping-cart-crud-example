<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mi tienda
        </h2>
    </x-slot>

    <div class="container mx-auto grid grid-cols-4 gap-x-2 gap-y-4 p-2">
        @foreach($productos as $producto)
        <div class="bg-rose-300">
            <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-orange-300">
                <a href="#!">
                    <img class="rounded-t-lg" src="{{ asset('storage/productos/' . $producto->foto) }}" alt="" />
                </a>
                <div class="p-6">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        {{ $producto->nombre }} 
                    </h5>
                    <p>{{ $producto->precio }}</p>
                    <p>{{ $producto->producto_tipo->descripcion }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>