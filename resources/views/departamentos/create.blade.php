<!-- resources/views/departamentos/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Departamento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre_departamento">Nombre del Departamento:</label>
            <input type="text" name="nombre_departamento" id="nombre_departamento" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Crear</button>
    </form>
</div>
@endsection
