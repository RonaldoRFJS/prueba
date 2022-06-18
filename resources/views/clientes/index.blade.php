@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<a href="{{ url('clientes/create') }}" class="btn btn-success"> Registrar nuevo cliente </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach( $clientdat as $cliente)
        <tr>
            <td>{{ $cliente->id}}</td>

            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$cliente->Foto }}" width="100" alt="">
            </td>

            <td>{{ $cliente->Nombre}}</td>
            <td>{{ $cliente->Direccion}}</td>
            <td>{{ $cliente->Correo}}</td>
            <td>{{ $cliente->Telefono}}</td>
            <td>

                <a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning">
                        Editar
                </a>  
                |   
            
            <form action="{{ url('/clientes/'.$cliente->id ) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas realmente borrar?')" value="Borrar">

            </form>
            
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!! $clientdat->Links() !!}
</div>
@endsection