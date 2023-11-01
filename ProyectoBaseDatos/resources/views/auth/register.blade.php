@extends('layouts.base')

@section('content')
<section class="h-100 gradient-form" style="background-color: #343a40;">
    <link rel="stylesheet" href="{{asset('recursos/estilos.css')}}">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="{{asset('recursos/LogoAgua.jpg')}}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Sistema de Cobro Campiña II</h4>
                  </div>

                  <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Nombre de Usuario :</label>
                      <input type="text" name="name" id="form2Example11" class="form-control"
                        placeholder="Registrese con un nuevo usuario." />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Email :</label>
                      <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Ingrese un email valido." />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Ingrese su nuevo contraseña :</label>
                      <input type="password" name="password" id="form2Example22" class="form-control"
                      placeholder="Ingrese un email valido." />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Confirme su contraseña :</label>
                      <input type="password" name="password_confirmation" id="form2Example22" class="form-control"
                      placeholder="Ingrese un email valido." />
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrase
                        </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <a href="{{route('login')}}" class="btn btn-outline-info">Volver al login</a>
                    </div>
                  </form>

                </div>

              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Nuestro formulario de registro.</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
