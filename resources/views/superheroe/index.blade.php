@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('/superheroe/create')}}" class="btn btn-success" > Agregar nuevo superheroe</a>
<br/>
<br/>
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
                <img class="img-thumbnail img-fliud" width="50px" height="50x" src="{{asset('storage'.'/'.$superheroe->Foto)}}"/>
             {{$superheroe->Foto}}
            
            
            </td>
             <td>{{$superheroe->NombreReal}}</td>
             <td>{{$superheroe->NombreSuperheroe}}</td>
             <td>{{$superheroe->InformacionAdicional}}</td>
             <td>

             <a href="{{url('/superheroe/'.$superheroe->id.'/edit')}}" class="btn btn-warning"> editar</a>
                
             <form action="{{url('/superheroe/'.$superheroe->id)}}" class="d-inline" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
@endsection