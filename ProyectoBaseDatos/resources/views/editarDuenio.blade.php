@extends('layouts.base')

@section('content')
    <div class="row margen">
        <div class="col-12">
            <div class="mt-5 mb-4">
                <h2>Formulario de Edicion de un Dueño de Casa</h2>
            </div>
            <div class="col text-end">
                <a href="{{ route('home') }}" class="btn btn-primary mb-4">Volver al inicio</a>
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

        <form action="{{ route('editar', ['id' => $duenioCasa->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Nombre del Dueño de Casa:</strong>
                        <input type="text" class="form-control" name="nombre" placeholder="Registre su Nombre"
                            value="{{ old('nombre', $duenioCasa->nombre) }}" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Primer Apellido</strong>
                        <input type="text" class="form-control" name="primerApellido"
                            placeholder="Registre su Apellido Paterno"
                            value="{{ old('primerApellido', $duenioCasa->primerApellido) }}" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Segundo Apellido</strong>
                        <input type="text" class="form-control" name="segundoApellido"
                            placeholder="Registre su Apellido Materno"
                            value="{{ old('segundoApellido', $duenioCasa->segundoApellido) }}">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Direccion: </strong>
                        <input type="text" class="form-control" name="direccionCasa" placeholder="Registre su Direccion"
                            value="{{ old('direccionCasa', $duenioCasa->direccionCasa) }}">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong># Casa:</strong>
                        <input type="integer" name="nroCasa" class="form-control" placeholder="Registre el numero"
                            value="{{ old('nroCasa', $duenioCasa->nroCasa) }}">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Actualizar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
