<!-- resources/views/departamentos/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col" style="text-align: right;">
            <a href="{{ route('departamentos.create') }}" class="btn btn-primary">Crear Departamento</a>
        </div>
    </div>

    <h1>Listado de Departamentos</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->id }}</td>
                    <td>{{ $departamento->nombre_departamento }}</td>
                    <td>
                        <a href="{{ route('departamentos.edit', $departamento) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('departamentos.destroy', $departamento) }}" method="POST" class="d-inline">
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
