
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Mi lista de superheroes</h1>

    <a class="btn btn-primary mt-2" href="{{ route('superheroes.create') }}">Añadir superheroe</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de superheroes</th>
                <th scope="col">Nombre real</th>
                <th scope="col">Foto</th>
                <th scope="col">Informacion adicional</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superheroe)
            <tr>
                <td>{{ $superheroe->id }}</td>
                <td>{{ $superheroe->nombre_de_superheroe }}</td>
                <td>{{ $superheroe->nombre_real }}</td>
                <td>
                    <img src="{{ $superheroe->foto }}" alt="" style="width: 150px;">
                </td>
                <td>{{ $superheroe->informacion_adicional }}</td>
                <td>
                    <a href="{{ route('superheroes.edit', $superheroe) }}">Editar</a>
                </td>
                <td>
                    <form action="{{ route('superheroes.destroy', $superheroe) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar este superheroe?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection