@extends('layouts.plantilla')
@section('title', 'Editar Miembro')
@section('content')
       <h1>Editar Miembro</h1>
       <div>
              <form action="{{route('members.update',$miembros->id)}}" method="POST">
                     @csrf
                     @method('put')
                     <ul>
                            <li>Nombre</li>
                            <li><input type="text" name="nombre" id="nombre" value="{{$miembros->name}}" /></li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value="{{$miembros->last_name}}"/></li>
                     </ul>
                     <ul>
                            <li>Fecha de Nacimiento</li>
                            <li><input type="date" name="fecnac" id="fecnac" value="{{$miembros->date_born}}"/></li>
                     </ul>
                     <ul>
                            <li>Telefono</li>
                            <li><input type="text" name="telef" id="telef" value="{{$miembros->phone}}"/></li>
                     </ul>
                     <ul>
                            <li>Ciudad</li>
                            <li><input type="text" name="idcity" id="idcity" value="{{$miembros->idcity}}"/></li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection