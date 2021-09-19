<x-app-layout>
<x-slot name="header">Encabezado</x-slot>

    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>descripcion</th>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->descripcion}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>