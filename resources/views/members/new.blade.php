@extends('layouts.plantilla')
@section('title', 'Nuevo Miembro')
@section('content')
       <h1>Nuevo Miembro</h1>
       <div>
              <form action="{{route('members.store')}}" method="POST">
                     @csrf
                     <ul>
                            <li>Nombre</li>
                            <li><input type="text" name="nombre" id="nombre" value="" /></li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value=""/></li>
                     </ul>
                     <ul>
                            <li>Fecha de Nacimiento</li>
                            <li><input type="date" name="fecnac" id="fecnac" value=""/></li>
                     </ul>
                     <ul>
                            <li>Telefono</li>
                            <li><input type="text" name="telef" id="telef" value=""/></li>
                     </ul>
                     <ul>
                            <li>Ciudad</li>
                            <li><input type="text" name="idcity" id="idcity" value=""/></li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection