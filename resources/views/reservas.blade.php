@extends('layouts.master')
@section('title','Reservas')
@section('content')
<section class="tam centro">
    <div class="reservas">
        <table class="reservas">
            <tr>
                <td align="center">
                 
                    <p class="titulo">Reservas</p>
                </td>
                
            </tr>
            <tr>
                <td  align="center">
                    <a href="{{ route('reservas.create') }}" class="registro text-white" >Nueva Reserva</a>
                </td>
            </tr>
            <tr>
                <td  align="center" class="text">
                    <br>
                    Listado de Reservas
                </td>
            </tr>
            @forelse ($reservas as $nombre => $reserva)
            <tr>
               
                <td>
                    <br><a href="{{ route('reservas.show', $reserva->name) }}" class="registro text-white" style="width:500">Mostrar todas las reservas de {{$reserva->name}}</a></td>
            </tr>
            @empty
            <tr style="height:10vh">
                <td colspan="4" align="center">No existe ninguna persona que mostrar </td>
              
            </tr>
        @endforelse
        
        </table>
       
        @endsection
    </div>
</section>

