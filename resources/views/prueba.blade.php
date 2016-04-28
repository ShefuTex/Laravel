@extends('layout.layoutbase')

@section('head')
<title>Egresados - Registro</title>
@stop

@section('content')

<br>
  <div class="col-sm-12" align="center">
    <h3 align="center"><strong>Registro de los Perfiles de Egreso</strong></h3>
    <hr style="height: 2px; width:50%; background-color: #c72020;">
  </div>
<br>

  <div class="col-sm-12" align="center">

    {!! Form::open(['class' => 'col-sm-12 form-horizontal', 'role' => 'form'] )  !!}
        
        <div class="form-group">
          {!! Form::label( 'claveperfil', 'Clave de Perfil:', ['class' => 'form-control-label col-sm-4 alinear'] ) !!}
          <div class="col-sm-1">
            {!! Form::text( 'claveperfil', null, ['class' => 'form-control'] ) !!}
          </div>
          {!! Form::label( 'descprefil', 'Desc. del Perfil:', ['class' => 'form-control-label col-sm-1 alinear'] ) !!}
          <div class="col-sm-3">
            {!! Form::text( 'descprefil', null, ['class' => 'form-control'] ) !!}
          </div>
        </div>
        <br>
        <br>
          <div class="col-sm-offset-5 col-sm-2" align="center">
            {!! Form::button('Alta', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg btn-block']) !!}
          </div>
  {!! Form::close() !!}

  </div>

      <div class="col-sm-12" align="center">
        <hr style="height: 2px; width:50%; background-color: #c72020;">
      </div>


@stop

@section('footer')

@stop
