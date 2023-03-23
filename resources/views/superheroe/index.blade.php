@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('/superheroe/create')}}"> Agregar nuevo superheroe</a>

    <table class="table table-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre Real</th>
                <th>Nombre Superheroe</th>
                <th>Informacion Adicional</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $superheroe) 
            <tr>
             <td>{{$superheroe->id}}</td>
             <td>
                <img width="50px" height="50x" src="{{asset('storage'.'/'.$superheroe->Foto)}}"/>
             {{$superheroe->Foto}}
            
            
            </td>
             <td>{{$superheroe->NombreReal}}</td>
             <td>{{$superheroe->NombreSuperheroe}}</td>
             <td>{{$superheroe->InformacionAdicional}}</td>
             <td>

             <a href="{{url('/superheroe/'.$superheroe->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/superheroe/'.$superheroe->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
@endsection