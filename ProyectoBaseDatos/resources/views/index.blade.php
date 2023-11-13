@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12 mt-5 mb-3">
            <div>
                <h2 class="text-white">Sistema de Agua OTB Campiña 2</h2>
            </div>

            @if (Session::get('success'))
                <div class="alert alert-success mt-2">
                    <strong>{{ Session::get('success') }}<br>

                </div>
            @endif

            <div class="mt-3">
                <a href="{{ route('crear') }}" type="button" class="btn btn-outline-secondary">Registrar nuevo duenio de
                    casa</a>
                <a class="btn btn-outline-secondary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-12 mt-3">
            <table class="table  text-white">
                <tr class="text-secondary">
                    <th>Id</th>
                    <th>Nombre del Dueño</th>
                    <th>Apellido Paterno del Dueño</th>
                    <th>Apellido Materno del Dueño</th>
                    <th>Direccion de Casa</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
                <ul>
                    @foreach ($duenios as $duenio)
                    <tr>
                        <td class="fw-bold"> {{$duenio->id}}</td>
                        <td class="fw-bold"> {{$duenio->nombre}}</td>
                        <td class="fw-bold"> {{$duenio->primerApellido}}</td>
                        <td class="fw-bold"> {{$duenio->segundoApellido}}</td>
                        <td class="fw-bold"> {{$duenio->direccionCasa}}</td>
                        <td>
                            <span class="badge bg-warning fs-6">Deudor</span>
                        </td>
                        <td>
                            <a href="{{route('vistaEditar')}}" class="btn btn-warning">Editar</a>

                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </ul>
            </table>
            {{$duenios->links()}}
        </div>
    </div>
@endsection
