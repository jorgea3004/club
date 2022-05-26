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
                            <li><input type="text" name="nombre" id="nombre" value="{{old('nombre', $miembros->name)}}" />
                                   @error('name')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value="{{old('nombre', $miembros->last_name)}}"/>
                                   @error('lastname')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Fecha de Nacimiento</li>
                            <li><input type="date" name="fecnac" id="fecnac" value="{{old('nombre', $miembros->date_born)}}"/>
                                   @error('fecnac')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Telefono</li>
                            <li><input type="text" name="telef" id="telef" value="{{old('nombre', $miembros->phone)}}"/>
                                   @error('telef')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Ciudad</li>
                            <li><input type="text" name="idcity" id="idcity" value="{{old('nombre', $miembros->idcity)}}"/>
                                   @error('idcity')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection