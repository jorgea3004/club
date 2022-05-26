@extends('layouts.plantilla')
@section('title', 'Listado de Miembros')
@section('content')
       <h1>Listado de Miembros</h1>
       <div><a href="{{route('members.new')}}">Nuevo</a></div>
       <div>
           <ul id="ulheaders" class="listado">
               <li>NOMBRE</li>
               <li>FECHA</li>
               <li>PHONE</li>
               <li>CIUDAD</li>
               <li>&nbsp;</li>
           </ul>
           <ul id="ulcontent" class="listado">
            @foreach($miembros as $item)
            <li>{{$item->name . " " . $item->last_name}}</li>
            <li>{{$item->date_born}}</li>
            <li>{{$item->phone}}</li>
            <li>{{$item->idcity}}</li>
            <li><a href="{{route('members.edit', $item->id)}}">EDITAR</a></li>
            @endforeach
           </ul>
       </div>
@endsection