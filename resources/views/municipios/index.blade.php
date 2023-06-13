<!-- resources/views/municipios/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Listado de Municipios</h1>

    <div class="row mt-4 mb-3">
        <div class="col" style="text-align:right;">
            <a href="{{ route('municipios.create') }}" class="btn btn-primary">Crear Municipio</a>
        </div>
    </div>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->id }}</td>
                    <td>{{ $municipio->nombre_municipio }}</td>
                    <td>{{ $municipio->departamento->nombre_departamento }}</td>
                    <td>
                        <a href="{{ route('municipios.edit', $municipio) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('municipios.destroy', $municipio) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
