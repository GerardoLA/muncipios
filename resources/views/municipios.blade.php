<x-app-layout>
   <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">NumGasolineras </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($municipios as $municipio)
        <tr>

            <td>{{ $municipio->id }}</td>
            <td>{{ $municipio->nombre }}</td>
            <td>{{ $municipio->numGasolineras }}</td>
            <td>
                <form action="{{ route('municipios.eliminar', ['municipio'=> $municipio]) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </td>
            <td>
                <a href="{{route('municipios.update', ['municipio'=> $municipio])}}">Actualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>    
</x-app-layout>