

<!--$modo me permite cambiar de nombre segun el blade en el que me ubique -->
<H1> {{ $modo }} Cliente </h1>


@if(count($errors)>0)

    div class <div class="alert alert-danger" role="alert">
<ul>
    

    @foreach( $errors->all() as $error)
    
       <li> {{ $error }} </li>

    @endforeach
</ul>
    </div>
@endif
<div class="form-group">

<!--Este formulario se usa en Registrar y Editar -->
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre') }}" id="Nombre">


</div>

<div class="form-group">
<label for="Direccion"> Dirección </label>
<input type="text" class="form-control" name="Direccion" value="{{ isset($cliente->Direccion)?$cliente->Direccion:old('Direccion') }}" id="Direccion">

</div>

<div class="form-group">
<label for="Correo"> Correo </label>
<input type="text" class="form-control" name="Correo" value="{{ isset($cliente->Correo)?$cliente->Correo:old('Correo') }}" id="Correo">

</div>

<div class="form-group">
<label for="Telefono"> Telefono </label>
<input type="text" class="form-control" name="Telefono" value="{{ isset($cliente->Telefono)?$cliente->Telefono:old('Telefono') }}" id="Telefono">
</div>

<div class="form-group">
<label for="Foto">  </label>
@if(isset($cliente->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$cliente->Foto }}" width="100" alt="">
@endif
</div>

<div class="form-group">
<input type="file"  name="Foto" value="" id="Foto">

</div>


<input class="btn btn-success" type="submit" value="{{ $modo}} datos">

<a class="btn btn-primary" href="{{ url('clientes/') }}"> Regresar </a>

<br>