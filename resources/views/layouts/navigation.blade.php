


@extends('layouts.master')
@section('title','Dashboard')
@section('content')


<section class="tam centro" style="background-color: #f5f2f2;">

    <table class="perfil" align="center">

        <tr class>
          <th class="" rowspan="2" width="200px" height="200px" style="text-align: center;">
          @if(Auth::user()->image)
                <img src="/storage/{{ Auth::user()->image}}" alt="Avatar" class="img-fluid" style="width: 170px;border-radius: 100%;"/>
                @else
                <img src="/imagenes/perfil.png" alt="Avatar" class="img-fluid" style="width: 170px;border-radius: 100%;"/>
                @endif
          </th>  

          <td class="titulo" colspan="2">
            Informacion
          </td>
        </tr>
    

      <tr>
        <td class="text" width="400" align="center">
            Correo: <br>
            {{ Auth::user()->email }}
        </td>
        <td class="text" width="400" align="center">
            Nombre: <br>
            {{ Auth::user()->name }}
        </td>
      </tr>

    
          <tr height="100px">
            <td colspan="3" style="text-align: center;">
              <div style="display: inline-block;">
                <x-responsive-nav-link :href="route('profile.edit')" class="botinfo text-white">
                  {{ __('Ajustes de Perfil') }}
                </x-responsive-nav-link>
              </div>
              <div style="display: inline-block;">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" class="botinfo text-white">
                    {{ __('Cerrar Sesión') }}
                  </x-responsive-nav-link>
                </form>
              </div>
              <div style="display: inline-block;">
                <x-responsive-nav-link :href="route('inicio')" class="botinfo text-white">
                  {{ __('Volver al Inicio') }}
                </x-responsive-nav-link >
              </div>
            </td>
          </tr>
     


          

        </table>

      
  </section>

  @endsection
