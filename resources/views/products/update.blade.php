{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Beneficiario')

{{-- Definimos el contenido --}}
@section('content')
    <h1 class="text-center">Modificar</h1>
    <h5 class="text-center">Formulario para actualizar beneficiario</h5>
    <hr>
    <div class="container">
        <form action="/products/update/{{$beneficiario->codigo}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row row col-6 m-auto">
                <div class="col-6">
                    Nombre
                    <input type="text" class="form-control" name="nombre" value="{{$beneficiario->nombre}}">
                    @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    Apellido
                    <input type="text" class="form-control" name="apellido" value="{{$beneficiario->apellido}}">
                    @error('apellido')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    Edad
                    <select name="edad" class="form-control">
                        @foreach($edad $item)
                        <option value="{{$item->codigo}}" {{$item->codigo==$beneficiario->edad?'selected':''}}>{{$item->nombre}}</option>
                        @endforeach
                    </select>
                    @error('edad')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 mt-2">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection