

@extends('layouts.base')

@section('content')
@if(Session::get('success'))
<div class="alert alert-success">
  <p>{{ Session::get('success') }}</p><br><br>
</div>
@endif
<div class="row">
  <div class="col-12">
    <div>
      <h2 class="text-white mt-3">CRUD de Usuarios</h2>
    </div>
    <div>
      <a href="" class="btn btn-primary mt-3">Crear Usuario</a>
    </div>
  </div>
  <div class="col-12 mt-5">
    <table class="table table-bordered text-white">
      <tr class="text-secondary">
        <th>Usuario</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Acción</th>
      </tr>
      @foreach ($users as $user)
          
      <tr>
        <td class="fw-bold">{{$user->nombre}}</td>
        <td>{{$user->email}}</td>
        <td>
          {{$user->password}}
        </td>
        <td>
          <a href="" class="btn btn-warning">Editar</a>
          <form action="" method="post" class="d-inline">
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection