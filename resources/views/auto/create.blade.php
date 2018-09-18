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
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8" id="card-principal">
            <div class="card" >
                <div class="card-header">
                    <center>
                        <h3>Registrar Auto</h3>
                    </center>
                </div>
                <div class="card-body">
                    <form action="{{ route('auto.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-tag" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="text" name="nombre" placeholder="nombre" value="{{old('nombre')}}" required>
                            </div>
                            <small>Nombre</small><br>
                        </div>                  
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-thumb-tack"></i></span>
                                </div>
                                <input class="form-control" type="text" name="placa" placeholder="placa" value="{{old('placa')}}" required>
                            </div>
                            <small>Name</small><br>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="color" name="color" placeholder="Titulo" value="{{old('color')}}" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="date" name="fecha" placeholder="fecha" value="{{old('titulo')}}" required>
                            </div>
                            <small>Fecha de Compra</small><br>
 
                        </div>                      

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-male" aria-hidden="true"></i></span>
                                </div>
                                <select name="propietario" id="" class="form-control">
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