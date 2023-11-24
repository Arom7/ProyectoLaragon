@extends('layouts.base')

@section('content')
    <div class="div-izquierdo">
        <nav class="nav">
            <ul class="list">

                <li class="list_item">
                    <div class="list_button">
                        <img src="{{ asset('recursos/assets/home.svg') }}" class="list_img">
                        <a href="{{ url('/') }}" class="nav_link">Inicio</a>
                    </div>
                </li>

                <li class="list_item list_item--click">
                    <div class="list_button list_button--click">
                        <img src="{{ asset('recursos/assets/administrador.svg') }}" class="list_img">
                        <a href="#" class="nav_link">Admin</a>
                        <img src="{{ asset('recursos/assets/flecha.svg') }}" class="list_arrow"></a>
                    </div>

                    <ul class="list_show">
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_create.svg') }}" class="list_img">
                            <a href="{{route('crear')}}" class="nav_link nav_link--inside">Crear Dueño</a>
                        </li>
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_edit.svg') }}" class="list_img">
                            <a href="#" class="nav_link nav_link--inside">Editar Datos Dueño</a>
                        </li>
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_edit.svg') }}" class="list_img">
                            <a href="#" class="nav_link nav_link--inside">Editar Recibo</a>
                        </li>
                    </ul>
                </li>

                <li class="list_item list_item--click">
                    <div class="list_button list_button--click">
                        <img src="{{ asset('recursos/assets/lecturador.svg') }}" class="list_img">
                        <a href="#" class="nav_link">Lecturador</a>
                        <img src="{{ asset('recursos/assets/flecha.svg') }}" class="list_arrow"></a>
                    </div>
                    <ul class="list_show">
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_create.svg') }}" class="list_img">
                            <a href="{{route('registrarRecibo')}}" class="nav_link nav_link--inside">Crear Recibo</a>
                        </li>
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_edit.svg') }}" class="list_img">
                            <a href="#" class="nav_link nav_link--inside">Editar Recibo</a>
                        </li>
                    </ul>

                </li>

                <li class="list_item list_item--click">
                    <div class="list_button list_button--click">
                        <img src="{{ asset('recursos/assets/lecturador.svg') }}" class="list_img">
                        <a href="#" class="nav_link">Dueño de Casa</a>
                        <img src="{{ asset('recursos/assets/flecha.svg') }}" class="list_arrow"></a>
                    </div>
                    <ul class="list_show">
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_read.svg') }}" class="list_img">
                            <a href="#" class="nav_link nav_link--inside">Lectura de Recibos</a>
                        </li>
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_edit.svg') }}" class="list_img">
                            <a href="#" class="nav_link nav_link--inside">Editar Datos</a>
                        </li>
                        <li class="list_inside">
                            <img src="{{ asset('recursos/assets/icon_edit.svg') }}" class="list_img">
                            <a href="#" class="nav_link nav_link--inside">Pago Deuda</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <div class="row div-derecho">
        <div class="col-5 mt-5 mb-3" id="cabeza1">
            <div>
                <h2 class="text-white">Sistema de Agua OTB Campiña 2</h2>
            </div>

            @if (Session::get('success'))
                <div class="alert alert-success mt-2">
                    <strong>{{ Session::get('success') }}<br>

                </div>
            @endif

            <div class="mt-3">
                <a href="{{ route('crear') }}" type="button" class="btn btn-outline-secondary">Registrar nuevo dueño de
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
        <div class="col-12 mt-3" id="cabeza2">
            <table class="table  text-white">
                <div>
                    <h4>Lista de dueños: </h4>
                </div>
                <tr class="text-secondary">
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Direccion de Casa</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
                <ul>
                    @foreach ($duenios as $duenio)
                        <tr>
                            <td class="fw-bold"> {{ $duenio->id }}</td>
                            <td class="fw-bold"> {{ $duenio->nombre }}</td>
                            <td class="fw-bold"> {{ $duenio->primerApellido }}</td>
                            <td class="fw-bold"> {{ $duenio->segundoApellido }}</td>
                            <td class="fw-bold"> {{ $duenio->direccionCasa }}</td>
                            <td>
                                <span class="badge bg-warning fs-6">Deudor</span>
                            </td>
                            <td>
                                <a href="{{ route('vistaEditar', ['id' => $duenio->id]) }}"
                                    class="btn btn-precausion">Editar</a>

                                <form id="formEliminar" action="{{ route('destruir', ['id' => $duenio->id]) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-peligro" data-bs-toggle="modal"
                                        data-bs-target="#confirmarEliminacion">Eliminar</button>
                                </form>

                                <div class="modal fade" id="confirmarEliminacion" tabindex="-1" role="dialog"
                                    aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="modalLabel">Confirmar Eliminación
                                                </h5>
                                                <button type="button" class="close btn btn-peligro"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-dark ">
                                                <p>¿Estás seguro de que deseas eliminar este elemento?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <form action="{{ route('destruir', ['id' => $duenio->id]) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </ul>
            </table>
            {{ $duenios->links() }}
        </div>
    </div>
@endsection
