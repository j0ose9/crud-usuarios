<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="row">
  <div class="col-12">
    <div>
      <h2>Crear Usuario</h2>
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

  <form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
          <strong>Usuario:</strong>
          <input type="text" name="name" class="form-control" placeholder="Nombre" >
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
          <strong>Email:</strong>
          <input type="email" name="email" class="form-control" placeholder="correo electrónico">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
          <strong>Contraseña:</strong>
          <input type="password" name="password" class="form-control" placeholder="Introduce tu contraseña" >
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </form>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
