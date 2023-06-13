<!-- resources/views/departamentos/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Departamento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('departamentos.update', $departamento) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre_departamento">Nombre del Departamento:</label>
            <input type="text" name="nombre_departamento" id="nombre_departamento" class="form-control" value="{{ $departamento->nombre_departamento }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
    </form>
</div>
@endsection
