@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="mt-5 mb-4">
            <h2>Formulario de Registro de un Nuevo Dueño de Casa</h2>
        </div>
        <div class="col text-end">
            <a href="{{route('home')}}" class="btn btn-primary mb-4">Volver al inicio</a>
        </div>
    </div>



    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>Algo salio mal!</strong> No se realizo el registro<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <form action="{{route('registrar')}}" method="POST">
        <!--
        EL token csrf () es una medida de seguridad utilizada para proteger las aplicaciones web de ataques maliciosos. El token
        es un valor unico y secreto que se genera para cada formulario en la aplicacion. La enviar un formulario, el token se envia
        junto con los datos y Laravel verifica si coincide con el token almacenado en el servidor, si no coincide podria tratarse
        de un intento de falsificacion de peticion en el sitio. Esto ayuda a garantizar que solo las solicitudes legitimas y autenticas
        sean procesadas por la aplicacion.
        -->
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group mt-3 mb-3">
                    <strong >Nombre del Dueño de Casa:</strong>
                    <input type="text" class="form-control" name="nombre" placeholder="Registre su Nombre" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group mt-3 mb-3">
                    <strong>Primer Apellido</strong>
                    <input type="text" class="form-control" name="primerApellido" placeholder="Registre su Apellido Paterno"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group mt-3 mb-3">
                    <strong>Segundo Apellido</strong>
                    <input type="text" class="form-control" name="segundoApellido" placeholder="Registre su Apellido Materno"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group mt-3 mb-3">
                    <strong>Direccion: </strong>
                    <input type="text" class="form-control" name="direccionCasa" placeholder="Registre su Direccion"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong># Casa:</strong>
                    <input type="integer" name="nroCasa" class="form-control" placeholder="Registre el numero">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection
