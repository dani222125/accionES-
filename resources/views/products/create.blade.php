{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Beneficiario')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear Beneficiario</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/products/store" method="POST">
        @csrf
    <div class="row col-6 m-auto">
        <div class="col-6">
            Nombre
            <input type="text" class="form-control" name="nombre">
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Apellido
            <input type="text" class="form-control" name="apellido">
            @error('apellido')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-12">
            Edad
            <select name="edad" class="form-control">
                @foreach($edad as $item)
                <option value="{{$item->codigo}}">{{$item->nombre}}</option>
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