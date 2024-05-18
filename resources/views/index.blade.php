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
                        <a href="{{route('users.create')}}" class="btn btn-primary mt-3">Crear Usuario</a>
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
                          <td class="fw-bold">{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                            {{$user->password}}
                          </td>
                          <td>
                            <a href="{{route('users.edit', $user)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('users.destroy', $user)}}" method="post" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
