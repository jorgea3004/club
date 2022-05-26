@extends('layouts.plantilla')
@section('title', 'Nuevo Miembro')
@section('content')
       <h1>Nuevo Miembro</h1>
       <div>
              <form action="{{route('members.store')}}" method="POST">
                     @csrf
                     <ul>
                            <li>Nombre</li>
                            <li><input type="text" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Hugo" />
                                   @error('name')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value="{{old('lastname')}}" placeholder="Lopez" />
                                   @error('lastname')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Fecha de Nacimiento</li>
                            <li><input type="date" name="fecnac" id="fecnac" value="{{old('fecnac')}}" />
                                   @error('fecnac')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Telefono</li>
                            <li><input type="text" name="telef" id="telef" value="{{old('telef')}}" placeholder="5512345678" />
                                   @error('telef')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Ciudad</li>
                            <li><input type="text" name="idcity" id="idcity" value="{{old('idcity')}}" placeholder="5" />
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