<!Doctype html>

<html lang="es" class="no-js">

    <head>
        @include('layouts.cuerpo.metadatos')
        @yield('descripcion')
        @yield('title')
        @include('layouts.cuerpo.css')
        @yield('css')
    </head>
    <body>
        <header>
                @yield('h1')
                <nav class="navbar affix" role="navigation" id="navbar" data-spy="affix" data-offset-top="100">
                    <h2 hidden>Barra de Navegación</h2>
                    <div class="container-fluid navegacion">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <a href="/">
                                    <img src="{{ asset('img/logo.png') }}" alt="Logo Exergy" width="150">
                                </a>
                            </div><!--navbar-header-->
                            <div class="collapse navbar-collapse" id="collapse">
                                @if(Auth::guest())
                                    <ul class="navbar-nav bar-sup">     
                                        <li>
                                            <i class="fa fa-vcard fa-2x fa-border" aria-hidden="true"></i>
                                                <small>
                                                    <a href="{{ url('login') }}" class="llamar_registro">Loguearse</a> 
                                                    | 
                                                    <a href="{{ url('register') }}" class="llamar_registro">Registrarse</a>
                                                </small>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="navbar-nav bar-sup">  
                                        <li>
                                            <i class="fa fa-tachometer fa-2x fa-border" aria-hidden="true"></i>
                                                <small>
                                                    <a href="{{ route('auto.index') }}" class="llamar_registro">Gestionar Autos</a>
                                                    | 
                             
                                                </small>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav navbar-right bar-sup">
                                        <li class="dropdown" style="border:1px solid white;">
                                              @include('layouts.cuerpo.perfil')
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div> <!--collapse-->
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
        @if(Auth::guest())
            <footer>
                <h2 hidden>Pie de Pagina</h2>
                <div class="container-fluid piepag">
                    <center>Jhoysner Corona  
                      <a href="" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Codigo</a>  
                    </center>
                </div><!-- container piepag-->
            </footer>
        @endif
        
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('js')
</html>

