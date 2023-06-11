{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'beneficiario')

{{-- Definimos el contenido --}}
@section('content')
    <h1 class="text-center">Beneficiario</h1>
    <h5 class="text-center">Listado de Beneficiario</h5>
    <hr>
    {{-- Boton para ir al formulario de agregar Usuario --}}
    <br>
    <a class="btn btn-success btn-sm" href="/products/create">Agregar nuevo Beneficiario</a>
    <br>
    <br>
    <table class="container table table-hover table-bordered mt-2">
        {{-- Encabezados --}}
        <tr class="table-dark">
            <td>C&oacute;digo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Acciones</td>
        </tr>

        {{-- Listado de usuario --}}
        @foreach ($usuario as $item)
        <tr>
            <td>{{$item->codigo}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->edad}}</td>
            <td>
                {{-- boton para Agregar --}}
                <a class="btn btn-primary btn-sm" href="/products/edit/{{$item->codigo}}">Agregar</a>
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/products/destroy/{{$item->codigo}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
                

        </tr>
        @endforeach
    </table>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/product.js')}}"></script>
@endsection