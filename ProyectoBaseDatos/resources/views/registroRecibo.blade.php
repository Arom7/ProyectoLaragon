@extends('layouts.base')

@section('content')
    <div class="row margen">
        <div class="col-12">
            <div class="mt-5 mb-4">
                <h2>Formulario de Registro de un recibo</h2>
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

        <form action="{{ route('registrarRecibo') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Nombre del Dueño de Casa:</strong>

                        <input type="text" class="form-control" name="nombre"
                            placeholder="Ingrese el nombre de dueño de casa.">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Lectura Actual :</strong>
                        <input type="text" class="form-control" name="primerApellido"
                            placeholder="Registre la lectura actual."></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group mt-3 mb-3">
                        <strong>Mes de cobro: </strong>
                        <input type="text" class="form-control" name="direccionCasa"
                            placeholder="Registre el mes correspondiente a cobro."></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Crear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
