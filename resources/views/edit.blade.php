@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

<div class="row">
  <div class="col-12">
    <div>
      <h2>Editar Usuario</h2>
    </div>
    <div>
      <a href="{{route('users.index')}}" class="btn btn-primary">Volver</a>
    </div>
  </div>
  @if ($errors->any())
<div class="alert alert-danger">
    <p>Ha ocurrido un error con:</p><br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

  <form action="{{route('users.update', $user)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
          <strong>Usuario:</strong>
          <input type="text" name="nombre" class="form-control" placeholder="Nombre de usuario" value="{{$user->nombre}}">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
          <strong>Email:</strong>
          <input type="email" name="email" class="form-control" placeholder="correo electrónico" value="{{$user->email}}">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
          <strong>Contraseña:</strong>
          <input type="password" name="password" class="form-control" placeholder="Introduce tu contraseña" value="{{$user->password}}" >
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </form>
</div>
@endsection

