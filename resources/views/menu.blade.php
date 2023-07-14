@extends('layouts.master')
@section('title','Menu')
@section('content')
<br>
<br>
<br>

<section class="tamaño">
    <div class="vc vc1">
        
            <div class="container cc">
                <div class=" container texto1">
                    <h1 class="titulo">Los mejores Platillos, Bebidas y Más </h1>
                    <p class="parrafo"> ¡Aqui Tienes Nuestro Menú! </p>
                    <br>
                </div>
            </div>
        <table class="tdisplay" align="center">
            <tr>
                <td>
                    <a class="nav-link plato" href="#platos"></a>
                </td>
                <td>
                    <a class="nav-link desayuno" href="#desayunos"></a>
                </td>
                <td>
                    <a class="nav-link postres" href="#postres"></a>
                </td>
                <td>
                    <a class="nav-link segundos" href="#segundos"></a>
                </td>
                <td>
                    <a class="nav-link pescados" href="#pescados"></a>
                </td>
                <td>
                    <a class="nav-link bebidas" href="#bebidas"></a>
                </td>
            </tr>
            <tr class="text" align="center">
                <td>
                    Platos de Fondo
                </td>
                <td>
                    Desayunos
                </td>
                <td>
                    Postres
                </td>
                <td>
                    Segundos
                </td>
                <td>
                    Pescado
                </td>
                <td>
                    Bebidas
                </td>
            </tr>
        </table>
  
    
   
</section>

<section id="platos" class="tam" style="background-color: #f5f2f2;">
    <div class="vc vc2">
        <div class="container">
            <h1 class="titulo" style="font-size: 3.5vw;">Platos de Fondo</h1>
        </div>
        <br>
        <div class="container divc">
            <div id="carouselExample" class="carousel slide" data-ride="carousel"  style="width:100%;">
                <div class="carousel-inner">
                    @php
                        $platosPorSlide = 3;
                        $fondoCollection = $fondo->get();
                        $fondoArray = $fondoCollection->toArray();
                        $cuentaPlatos = count($fondoArray);
                        $grupos = array_chunk($fondoArray, $platosPorSlide);
                    @endphp
                    @foreach ($grupos as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="container divc">
                                <div class="row">
                                    @foreach ($grupo as $plato)
                                        <div class="col-md-4">
                                            <table align="center" class="tdisplay" style="width:350px; height:350px">
                                                <tr>
                                                    <td>
                                                        <div class="container" style="height: 28vh">
                                                            <p class="parrafo">{{ $plato['name'] }}</p>
                                                            <p class="subparrafo">{{ $plato['descripcion'] }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="container" align="center">
                                                            <a href="#modal{{$index}}-{{$loop->index}}" data-toggle="modal">
                                                                <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="menuim" alt="Logo">
                                                            </a>  
                                                        </div>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                  
                </div>
                @if($cuentaPlatos > 3)
                <a class="carousel-control-prev exclude-scroll custom-prev-icon" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next exclude-scroll custom-next-icon" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
                @endif
            </div>
        </div>
    </div>
  
    
    @foreach ($grupos as $index => $grupo)
    @foreach ($grupo as $plato)
    <div class="modal fade" id="modal{{$index}}-{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$plato['Codigo']}}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="img-fluid modal-image" alt="Imagen 1">
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach
    


</section>

<section id="desayunos" class="tam" style="background-color:white;">
       <div class="vc vc2">
        <div class=" container">
     
            <h1 class="titulo" style="font-size: 3.5vw;">Desayunos</h1>
    
        </div>
        <br>
        <div class="container divc">
            <div id="carouselExampleDesayunos" class="carousel slide" data-ride="carousel"  style="width:100%;">
                <div class="carousel-inner">
                    @php
                    $desayunosPlatosPorSlide = 3;
                    $desayunosCollection = $desayunos->get();
                    $desayunosArray = $desayunosCollection->toArray();
                    $desayunosCuentaPlatos = count($desayunosArray);
                    $desayunosGrupos = array_chunk($desayunosArray, $desayunosPlatosPorSlide);
                    @endphp
                    @foreach ($desayunosGrupos as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="container divc">
                                <div class="row">
                                    @foreach ($grupo as $plato)
                                        <div class="col-md-4">
                                            <table align="center" class="tdisplay" style="width:350px; height:350px">
                                                <tr>
                                                    <td>
                                                        <div class="container" style="height: 28vh">
                                                            <p class="parrafo">{{ $plato['name'] }}</p>
                                                            <p class="subparrafo">{{ $plato['descripcion'] }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="container" align="center">
                                                            <a href="#modalDesayunos{{$index}}-{{$loop->index}}" data-toggle="modal">
                                                            <img src="{{ asset('/imagenes/' . $plato['imagen']) }}"
                                                                class="menuim" alt="Logo">
                                                            </a> 
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($desayunosCuentaPlatos > 3)
                <a class="carousel-control-prev exclude-scroll custom-prev-icon" href="#carouselExampleDesayunos" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next exclude-scroll custom-next-icon" href="#carouselExampleDesayunos" role="button" data-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                @endif
            </div>
        </div>
 
       </div>
       
    @foreach ($desayunosGrupos as $index => $grupo)
    @foreach ($grupo as $plato)
    <div class="modal fade" id="modalDesayunos{{$index}}-{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="modalDesayunos{{$index}}-{{$loop->index}}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="img-fluid modal-image" alt="">
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach
        
</section>

  <section id="postres" class="tam" style="background-color: #f5f2f2;">
    <div class="vc vc2">
        <div class=" container">
     
            <h1 class="titulo" style="font-size: 3.5vw;">Postres</h1>
    
        </div>
        <br>
        <div class="container divc">
            <div id="carouselExamplePostres" class="carousel slide" data-ride="carousel"  style="width:100%;">
                <div class="carousel-inner">
                    @php
                    $postresPlatosPorSlide = 3;
                    $postresCollection = $postres->get();
                    $postresArray = $postresCollection->toArray();
                    $postresCuentaPlatos = count($postresArray);
                    $postresGrupos = array_chunk($postresArray, $postresPlatosPorSlide);
                    @endphp
                    @foreach ($postresGrupos as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="container divc">
                                <div class="row">
                                    @foreach ($grupo as $plato)
                                        <div class="col-md-4">
                                            <table align="center" class="tdisplay" style="width:350px; height:350px">
                                                <tr>
                                                    <td>
                                                        <div class="container" style="height: 28vh">
                                                            <p class="parrafo">{{ $plato['name'] }}</p>
                                                            <p class="subparrafo">{{ $plato['descripcion'] }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="container" align="center">
                                                            <a href="#modalPostres{{$index}}-{{$loop->index}}" data-toggle="modal">
                                                            <img src="{{ asset('/imagenes/' . $plato['imagen']) }}"
                                                                class="menuim" alt="Logo">
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($postresCuentaPlatos > 3)
                <a class="carousel-control-prev exclude-scroll custom-prev-icon" href="#carouselExamplePostres" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next exclude-scroll custom-next-icon" href="#carouselExamplePostres" role="button" data-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                @endif
            </div>
        </div>
    </div>

    @foreach ($postresGrupos as $index => $grupo)
    @foreach ($grupo as $plato)
    <div class="modal fade" id="modalPostres{{$index}}-{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="modalPostres{{$index}}-{{$loop->index}}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="img-fluid modal-image" alt="Imagen 1">
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach
  </section>


  <section id="segundos" class="tam" style="background-color: white;">
  <div class="vc vc2">
    <div class="container">
        <h1 class="titulo" style="font-size: 3.5vw;">Segundos</h1>
    </div>
    <br>
    <div class="container divc">
        <div id="carouselExampleSegundos" class="carousel slide" data-ride="carousel" style="width:100%;">
            <div class="carousel-inner">
                    @php
                    $segundosPlatosPorSlide = 3;
                    $segundosCollection = $segundos->get();
                    $segundosArray = $segundosCollection->toArray();
                    $segundosCuentaPlatos = count($segundosArray);
                    $segundosGrupos = array_chunk($segundosArray, $segundosPlatosPorSlide);
                    @endphp
                    @foreach ($segundosGrupos as $index => $grupo)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="container divc">
                            <div class="row">
                                @foreach ($grupo as $plato)
                                    <div class="col-md-4">
                                        <table align="center" class="tdisplay" style="width:350px; height:350px">
                                            <tr>
                                                <td>
                                                    <div class="container" style="height: 28vh">
                                                        <p class="parrafo">{{ $plato['name'] }}</p>
                                                        <p class="subparrafo">{{ $plato['descripcion'] }}</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="container" align="center">
                                                        <a href="#modalSegundos{{$index}}-{{$loop->index}}" data-toggle="modal">
                                                        <img src="{{ asset('/imagenes/' . $plato['imagen']) }}"
                                                            class="menuim" alt="Logo">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($segundosCuentaPlatos > 3)
            <a class="carousel-control-prev exclude-scroll custom-prev-icon" href="#carouselExampleSegundos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next exclude-scroll custom-next-icon" href="#carouselExampleSegundos" role="button" data-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            @endif
        </div>
    </div>
    </div>
  </div>

  @foreach ($segundosGrupos as $index => $grupo)
  @foreach ($grupo as $plato)
  <div class="modal fade" id="modalSegundos{{$index}}-{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="modalSegundos{{$index}}-{{$loop->index}}Label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="img-fluid modal-image" alt="Imagen 1">
              </div>
          </div>
      </div>
  </div>
  @endforeach
  @endforeach
  </section>


  <section id="pescados" class="tam" style="background-color:  #f5f2f2;">
    <div class="vc vc2">
        <div class="container">
            <h1 class="titulo" style="font-size: 3.5vw;">Pescados</h1>
        </div>
        <br>
        <div class="container divc">
            <div id="carouselExamplePescados" class="carousel slide" data-ride="carousel" style="width:100%;">
                <div class="carousel-inner">
                    @php
                    $pescadosPlatosPorSlide = 3;
                    $pescadosCollection = $pescados->get();
                    $pescadosArray = $pescadosCollection->toArray();
                    $pescadosCuentaPlatos = count($pescadosArray);
                    $pescadosGrupos = array_chunk($pescadosArray, $pescadosPlatosPorSlide);
                    @endphp
                    @foreach ($pescadosGrupos as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="container divc">
                                <div class="row">
                                    @foreach ($grupo as $plato)
                                        <div class="col-md-4">
                                            <table align="center" class="tdisplay" style="width:350px; height:350px">
                                                <tr>
                                                    <td>
                                                        <div class="container" style="height: 28vh">
                                                            <p class="parrafo">{{ $plato['name'] }}</p>
                                                            <p class="subparrafo">{{ $plato['descripcion'] }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="container" align="center">
                                                            <a href="#modalPescados{{$index}}-{{$loop->index}}" data-toggle="modal">
                                                                <img src="{{ asset('/imagenes/' . $plato['imagen']) }}"
                                                                    class="menuim" alt="Logo">
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($pescadosCuentaPlatos > 3)
                <a class="carousel-control-prev exclude-scroll custom-prev-icon" href="#carouselExamplePescados" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next exclude-scroll custom-next-icon" href="#carouselExamplePescados" role="button" data-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                @endif
            </div>
        </div>
    </div>
    @foreach ($pescadosGrupos as $index => $grupo)
    @foreach ($grupo as $plato)
        <div class="modal fade" id="modalPescados{{$index}}-{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="modalPescados{{$index}}-{{$loop->index}}Label" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="img-fluid modal-image" alt="Imagen 1">
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach
   
  </section>

  
  <section id="bebidas" class="tam" style="background-color: #ffffff;">
    <div class="vc vc2">
        <div class="container">
            <h1 class="titulo" style="font-size: 3.5vw;">Bebidas</h1>
        </div>
        <br>
        <div class="container divc">
            <div id="carouselExampleBebidas" class="carousel slide" data-ride="carousel" style="width:100%;">
                <div class="carousel-inner">
                    @php
                    $bebidasPlatosPorSlide = 3;
                    $bebidasCollection = $bebidas->get();
                    $bebidasArray = $bebidasCollection->toArray();
                    $bebidasCuentaPlatos = count($bebidasArray);
                    $bebidasGrupos = array_chunk($bebidasArray, $bebidasPlatosPorSlide);
                    @endphp
                    @foreach ($bebidasGrupos as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="container divc">
                                <div class="row">
                                    @foreach ($grupo as $plato)
                                        <div class="col-md-4">
                                            <table align="center" class="tdisplay" style="width:350px; height:350px">
                                                <tr>
                                                    <td>
                                                        <div class="container" style="height: 28vh">
                                                            <p class="parrafo">{{ $plato['name'] }}</p>
                                                            <p class="subparrafo">{{ $plato['descripcion'] }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="container" align="center">
                                                            <a href="#modalBebidas{{$index}}-{{$loop->index}}" data-toggle="modal">
                                                                <img src="{{ asset('/imagenes/' . $plato['imagen']) }}"
                                                                    class="menuim" alt="Logo">
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($bebidasCuentaPlatos > 3)
                <a class="carousel-control-prev exclude-scroll custom-prev-icon" href="#carouselExampleBebidas" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next exclude-scroll custom-next-icon" href="#carouselExampleBebidas" role="button" data-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                @endif
            </div>
        </div>
    </div>
    @foreach ($bebidasGrupos as $index => $grupo)
    @foreach ($grupo as $plato)
        <div class="modal fade" id="modalBebidas{{$index}}-{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="modalBebidas{{$index}}-{{$loop->index}}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('/imagenes/' . $plato['imagen']) }}" class="img-fluid modal-image" alt="Imagen 1">
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach
   
   
  </section>

     
   
      


@endsection