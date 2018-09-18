@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav" id="side-menu">
                         <li>
                            <a href="{{ route('auto.index') }}" class="btn btn-primary">
                                <i class="fa fa-thumb-tack"></i>
                                Listar Autos
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('auto.create') }}" class="btn btn-primary">
                                <i class="fa fa-thumb-tack"></i>
                                Registrar Auto
                            </a>
                        </li>      
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8" id="card-principal">
            <div class="card" >
                <div class="card-header">
                    <center>
                        <h3>Editar Auto</h3>
                    </center>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('auto.update',$data->id)}}"  class="form">
                        {{ csrf_field() }}
                        {!! method_field('PUT') !!}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-tag" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="text" name="nombre" placeholder="nombre" value="{{$data->nombre}}" required>
                            </div>
                            <small>Nombre</small><br>
 
                        </div>                  
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-thumb-tack"></i></span>
                                </div>
                                <input class="form-control" type="text" name="placa" placeholder="placa" value="{{$data->placa}}" required>
                            </div>
                            <small>Placa</small><br>

                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="color" name="color" value="{{$data->color}}" placeholder="color"  required>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="date" name="fecha" placeholder="fecha" value="{{$data->fecha_compra}}" required>
                            </div>
                            <small>Fecha de Compra</small><br>

                        </div>                      

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-male" aria-hidden="true"></i></span>
                                </div>
                                <select name="propietario" id="" class="form-control">
                                    <option selected="selected" value="{{$data->propietario}}">{{$data->propietario->nombre}}</option>
                                    @foreach ($propietarios as $propietario)
                                        <option value="{{$propietario->id}}">{{$propietario->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small>Propietario</small><br>

                        </div>                       

                         <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                </div>
                                <select name="estado" id="estado" class="form-control">
                                    <option selected="selected" value="{{$data->estado}}">{{$data->estado}}</option>
                                    <option value="Venta">en Venta</option>
                                    <option value="Alquiler">en Alquiler</option>
                                    <option value="Chatarizar">Para Chatarizar</option>
                                </select>
                            </div>
                            <small>Estado</small><br>
                        </div>

                        <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection