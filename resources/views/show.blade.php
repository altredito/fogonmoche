@extends('layouts.master')
@section('title','Reservas')
@section('content')
     <section class="tam lista centro">
          <div class="">
               <br>
               <h2 class="titulo" align="center">Reservas</h2>

               @foreach ($reserva as $reservas)
               <br>
               <table class="table table-borderless listas" style="border-radius: 20px;">
                <thead class="">
                     <td align="center"><span class="text" >Codigo de Reserva</span></td>
                     <td align="center"><span class="text" >Fecha</span></td>
                     <td align="center"><span class="text" >Hora</span></td>
                     <td align="center"><span class="text" >Nombres</span></td>
                </thead>
                 <tbody >
                <tr>
                     <td align="center">RE00{{$reservas->Codigo}}</td>
                     <td align="center">{{$reservas->Fecha}}</td>
                     <td align="center">{{$reservas->Hora}}</td>
                     <td align="center">{{$reservas->name}}</td>
                </tr>
                <tr>
                     <td colspan="2" class="" align="center"><a class="btn btn-success" href="{{ route('reservas.edit',$reservas->Codigo)}}">Editar</a></td>
                     <td colspan="2" class=""align="center">
                         <form action="{{ route('reservas.destroy',$reservas->Codigo)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                     </td>
                </tr>
               </table>
           
                 @endforeach</td>
                 <div align="center">
                    <a href="/reservas" class="tmenu">Regresar</a>
     
                 </div>
                 
          </div>
         
     </section>
     @endsection