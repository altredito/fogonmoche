    <nav class="navbar justify-content-center prueba text navbar-expand">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/imagenes/logo1.png" width="225" height="30" alt="Logo"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center mx-auto">
                    <li class="nav-item el  {{ setActivo('inicio')}}"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item el {{ setActivo('menu')}}"><a class="nav-link " href="/menu">Menu</a></li>
                    <li class="nav-item el {{ setActivo('galeria')}}"><a class="nav-link " href="/galeria">Galeria</a></li>
                    <li class="nav-item el  {{ setActivo('about')}}"><a class="nav-link" href="/about">Sobre Nosotros</a></li>
                    <li class="nav-item el {{ setActivo('contacto')}}"><a class="nav-link " href="/contacto">Contacto</a></li>
                </ul>
                <ul class="navbar-nav ml-auto align-items-center">
                    @auth
                    <li class="">
                        <div class="fondo text-white" style="margin-right: 30px;">
                            <a href="{{ url('/dashboard') }}" class="text-white">Perfil</a>
                        </div>
                    </li>
                    <li>
                        <div  class="fondo text-white">
                            <th scope="col" class="{{ setActivo('reservas')}}"><a class="text-white" href="/reservas">Reserva</a></th>
                   
                        </div>
                    </li>
                    @else
                    <li class="" >
                        <div class="fondo text-white" style="margin-right: 30px;">

                        <a href="{{ route('login') }}" class=" text-white">Iniciar Sesión</a>
                         </div>
                    </li>
                    <li class="" >
                        @if (Route::has('register'))
                        <div  class="fondo text-white">
                            <a href="{{ route('register') }}" class="nav-item fondo text-white">Registrar</a>
                        </div>
                            @endif
                        </li>
                     
                    
                @endauth
                    
                </ul>
            </div>
        </div>
    </nav>