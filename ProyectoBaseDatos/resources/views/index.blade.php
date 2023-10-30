@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12 mt-5 mb-3">
                <div>
                    <h2 class="text-white">Sistema de Agua OTB Campiña 2</h2>
                </div>
                <div class="mt-3">
                    <a href="" type="button" class="btn btn-outline-secondary">Crear nuevo duenio de casa</a>
                </div>
        </div>
        <div class="col-12 mt-3">
            <table class="table  text-white">
                <tr class="text-secondary">
                    <th>Id</th>
                    <th>Nombre del Dueño</th>
                    <th>Direccion de Casa</th>
                    <th>Deuda Pendiente</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
                <tr>
                    <td class="fw-bold">Estudiar Laravel</td>
                    <td>Ver video: tu primer CRUD con laravel 10 en el canal</td>
                    <td>
                        31/03/23
                    </td>
                    <td>
                        <span class="badge text-warning fs-6">pendiente</span>
                    </td>
                    <td>

                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>

                        <form action="" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
