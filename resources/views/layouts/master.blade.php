<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
</head>
<script>
  $(document).ready(function() {
    // Desplazamiento suave al hacer clic en los enlaces del menú
    $('a[href^="#"]').not('.exclude-scroll').on('click', function(event) {
      // Verificar si el enlace abre un modal
      if (!$(this).attr('data-toggle')) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
          event.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top
          }, 1000);
        }
      }
    });
  
    // Guardar la posición de desplazamiento al abrir el modal
    $('.modal').on('show.bs.modal', function() {
      sessionStorage.setItem('scrollPosition', $(window).scrollTop());
    });
  
    // Restaurar la posición de desplazamiento al cerrar el modal
    $('.modal').on('hidden.bs.modal', function() {
      var scrollPosition = sessionStorage.getItem('scrollPosition');
      if (scrollPosition) {
        $(window).scrollTop(scrollPosition);
        sessionStorage.removeItem('scrollPosition');
      }
    });
  });
  </script>
  
<body>
          @include('partials.nav')
          @if (Route::has('login'))
            @endif
      <section id="seccion2" class="tam">
        @yield('content')
    
      </section>
    
 
</body>


</html>


</html>