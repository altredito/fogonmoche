@extends('layouts.master')
@section('title','Crear Reserva')
@section('content')
<section class="tam centro">
<div class="reservas">
    <table cellpading="3" cellspacing="5" class="table table-borderless">
        <tr align="center">
  
            <td class="titulo" colspan="4" style="font-size:40px">Crear nueva Reserva</td>
        </tr>
        <form action="{{ route('reservas.store')}}" method="post">
            @include('partials.form',['btnText' =>'Guardar'])
        </form>
        </table>
</div>
</section>
@endsection