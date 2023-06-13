<!-- resources/views/municipios/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Municipio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('municipios.update', $municipio) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre_municipio">Nombre del Municipio:</label>
                    <input type="text" name="nombre_municipio" id="nombre_municipio" class="form-control" value="{{ $municipio->nombre_municipio }}" required>
                </div>

                <div class="form-group">
                    <label for="departamento_id">Departamento:</label>
                    <select name="departamento_id" id="departamento_id" class="form-control" required>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" {{ $departamento->id == $municipio->departamento_id ? 'selected' : '' }}>{{ $departamento->nombre_departamento }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
