@extends('layouts.master')
@section('title','Inicio')
@section('content')

<div class="container contenedor">
    
    <div class=" container texto">
        <br>
        
        <br>
        <h1 class="titulo">La Mejor Experiencia <br> Gastronómica </h1>

        <p class="parrafo">¡Únete a nosotros y descubre el placer de probar los más exquisitos platos en el Fogón de Moche! <br>
        Te garantizamos una experiencia gastronómica que despertará todos tus sentidos y te dejará con ganas de volver por más. </p>
    
        <p class="subparrafo">Tenemos una gran variedad que de seguro saciará tu apetito</p> 
        
        <div class="registro">
            <a class="parrafo text-white" href="menu">Menú →</a> 
        </div>
       
  
    </div>
    
    <div  class="imagen">
    <img src="/imagenes/fogon.png" alt="fogon">
    </div>
</div>
@endsection