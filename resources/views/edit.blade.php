@extends('layouts.master')
@section('title','Editar Reserva')
@section('content')
<section class="tam centro">
<div class="reservas">
    <table cellpading="3" cellspacing="5" class="table table-borderless">
        <tr>
            <td class="titulo"  style="font-size:40px" colspan="2" align="center">Editar Reserva</td>
        </tr>
        <form action="{{ route('reservas.update',$reserva)}}" method="post">
        @method('PATCH')
        @include('partials.form',['btnText' =>'Actualizar'])
        </form>
   
        </table>
</div>
</section>

@endsection