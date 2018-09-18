@extends('layouts.frontend')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center" id="card-principal">
        <div class="col-md-2">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav" id="side-menu">
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
        <div class="col-md-10">
            @foreach ($data->chunk(4) as $chunk)
                <div class="row" id="card-principal">
                    @foreach($chunk as $auto)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="card" style="background-color: {{ $auto->color }} ; color: white;">
                                <div class="card-header">
                                    <center>
                                        <h3>{!! str_limit($auto->nombre, 20) !!}</h3>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <center>
                                        <div class="btn-group" role="group" aria-label="...">
                                            <a href="{{ route('auto.show',$auto->id) }}" class="btn btn-sm btn-warning" target="_blank">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('auto.edit',$auto->id) }}" class="btn btn-sm btn-success">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </a>
                                            {!!Form::open(['method' => 'DELETE','route' => ['auto.destroy', $auto->id],'style'=>'display:inline']) !!}
                                                <button type="submit" name="delete_modal" class="btn btn-sm btn-danger delete" >
                                                    <span class="glyphicon glyphicon-remove " aria-hidden="true"></span>
                                                </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            {!! $data->render() !!}
        </div>
    </div>
</div>
@endsection