@extends('layouts.master')
@section('title','Galeria')
@section('content')

<section class="tam">
    <div class="contenedore">

        <div class=" container texto">
        
            <br>
            <h1 class="titulo">Galeria </h1>
    
            <p class="parrafo"> ¡Conoce nuestro Local y Personal! </p>
        
            <br>

              
        <div class="registro">
            <a class="parrafo text-white" href="#fotos">Ver fotos</a> 
        </div>
       

        </div>
        <div  class="imagen">
            <img src="/imagenes/galeria.png" alt="fogon">
            </div>
 
</section>


<section id="fotos" class="tam" style="background-color: #f5f2f2;">
    <div class="vc vc2">
      <table class="tdisplay" align="center">
        <tr>
          <td>
            <a href="#modal1" data-toggle="modal">
              <img src="/imagenes/galeria1.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal2" data-toggle="modal">
              <img src="/imagenes/galeria2.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal3" data-toggle="modal">
              <img src="/imagenes/galeria3.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal4" data-toggle="modal">
              <img src="/imagenes/galeria4.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal5" data-toggle="modal">
              <img src="/imagenes/galeria5.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="#modal6" data-toggle="modal">
              <img src="/imagenes/galeria6.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal7" data-toggle="modal">
              <img src="/imagenes/galeria7.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal8" data-toggle="modal">
              <img src="/imagenes/galeria8.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal9" data-toggle="modal">
              <img src="/imagenes/galeria9.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
          <td>
            <a href="#modal10" data-toggle="modal">
              <img src="/imagenes/galeria10.jpg" class="img" alt="Logo" style="border-radius: 4px;">
            </a>
          </td>
        </tr>
      </table>
    </div>
  </section>
  
  <!-- Modals -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="/imagenes/galeria1.jpg" class="img-fluid" alt="Imagen 1">
          <p class="parrafo">Presentación de nuestros platos por uno de nuestros mozos</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="/imagenes/galeria2.jpg" class="img-fluid" alt="Imagen 2">
          <p class="parrafo">Nuestros clientes haciendo degustación de nuestros platillos</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="/imagenes/galeria3.jpg" class="img-fluid" alt="Imagen 3">
          <p class="parrafo">Cartel gigante de nuestro establecimiento</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="/imagenes/galeria4.jpg" class="img-fluid" alt="Imagen 4">
          <p class="parrafo">Nuestra cocinera estrella, Flor Castillo, sosteniendo uno de los manjares presentes en nuestros platos</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="/imagenes/galeria5.jpg" class="img-fluid" alt="Imagen 5">
            <p class="parrafo">Flor Castillo haciendo gala de uno de nuestros platillos estrella</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="/imagenes/galeria6.jpg" class="img-fluid" alt="Imagen 6">
            <p class="parrafo"> Clientes degustando nuestra sazón en otro de nuestros ambientes</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="/imagenes/galeria7.jpg" class="img-fluid" alt="Imagen 7">
            <p class="parrafo">Clientes degustando nuestra sazón en nuestro ambiente principal</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="/imagenes/galeria8.jpg" class="img-fluid" alt="Imagen 8">
            <p class="parrafo">Flor Castillo preparando uno de nuestros platillos con leña en nuestro fogón</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="/imagenes/galeria9.jpg" class="img-fluid" alt="Imagen 9">
            <p class="parrafo">Flor Castillo posando con sus invitados sosteniendo uno de nuestros ingredientes</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="/imagenes/galeria10.jpg" class="img-fluid" alt="Imagen 10">
            <p class="parrafo">Flor Castillo y su esposo José posando con algunos de nuestros ingredientes</p>
        </div>
      </div>
    </div>
  </div>
@endsection