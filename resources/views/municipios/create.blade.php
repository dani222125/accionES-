<!-- resources/views/municipios/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Municipio</h1>

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
            <form action="{{ route('municipios.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nombre_municipio">Nombre del Municipio:</label>
                    <input type="text" name="nombre_municipio" id="nombre_municipio" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="departamento_id">Departamento:</label>
                    <select name="departamento_id" id="departamento_id" class="form-control" required>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre_departamento }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Crear</button>
            </form>
        </div>
    </div>
</div>
@endsection
