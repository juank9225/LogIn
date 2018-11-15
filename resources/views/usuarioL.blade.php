@extends('layouts.Admin')

@section('content')
<div class="container">
    <div  class="row">
      <div class="col-md-12 col-md-offset-2"style="margin-top:20px">
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Congratulation</strong><h5>{{Session::get('message')}}</h5>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="card bg-light mb-3 " >
          <div class="card-header"><h5 class="card-title">Usuarios Activos</h5></div>
          <div class="card-body">
            <table class="table">
              <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>NickName</th>
                <th>Password</th>
                <th>SuperSu</th>
                <th>IdRol</th>
                <th>created_at</th>
                <th>update_at</th>
                <th>Acciones</th>
              </thead>
              @foreach($users as $user)
              <tbody  data-name="{{$user->nombre}}" data-nick="{{$user->nick}}">
                <td>{{$user->id}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->nick}}</td>
                <td></td>
                <td>{{$user->supersu}}</td>
                <td>{{$user->id_rol}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                  <div class="row justify-content-center">
                    {!!link_to_route('Usuario.edit',$ttle ='Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary btn-sm'])!!}
                    {!!Form::open(['route'=>['Usuario.destroy',$user->id],'method'=>'DELETE'])!!}
                      {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                    {!!Form::close()!!}
                  </div>
                </td>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
