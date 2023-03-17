@extends('template')

@section('content')
    <h1>Crear superheroe</h1>

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf

        <div class="mb-4 mt-2">
            <label class="form-label" for="nombre_de_superheroe">Nombre del superheroe</label>
            <input class="form-control" type="text" id="nombre_de_superheroe" name="nombre_de_superheroe">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="nombre_real">Nombre real</label>
            <input class="form-control" type="text" id="nombre_real" name="nombre_real">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="foto">Foto (URL)</label>
            <input class="form-control" type="text" id="foto" name="foto">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="informacion_adicional">Informacion adicional</label>
            <input class="form-control" type="text" id="informacion_adicional" name="informacion_adicional">
        </div>
        
        <input class="btn btn-primary" type="submit" value="Agregar">
    </form>
@endsection
