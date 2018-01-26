<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@extends('layouts.master')

@section('content')
  
    <div class="row">
        <div class="col-sm-4"><br>
            <img src="{{$pelicula['poster']}}" style="height:350px; width: 250px;"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0"></h4>
       </div>
        <div class="col-sm-8">

            <h2>{{$pelicula['title']}}</h2>
            <p>Año:{{$pelicula['year']}}<p>
            <p>Director:{{$pelicula['director']}}<p>     
            <p><strong>Resumen:</strong>{{$pelicula['synopsis']}}

            <p><strong>Estado:</strong>
                 <?php
                 if( $pelicula['rented'] == true){
                    echo 'película actualmente alquilada.';
                    echo '<br><br>';
                    echo '<button type="button" class="btn btn-primary">Alquilar película</button>';
                 }else{
                       echo 'Película disponible para alquilar.';
                       echo '<br><br>';
                       echo '<button type="button" class="btn btn-danger">Devolver Película</button>';
                   }
                 ?>
                <a href="{{url('catalog/edit')}}/{{$id}}" type="button" class="btn btn-warning"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>Editar película</a>
                <a  href="{{url('/catalog')}}"><button type="button" class="btn btn-default">Volver al listado</button></a>
            </p>

        </div>
    </div>
@stop