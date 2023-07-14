
@csrf
<tr align="center">
    <th class="oo">Fecha</th>
    <td><input type="date" class="form-control w-50" name="Fecha" value="{{old('Fecha',$reserva->Fecha)}}"><br>{{$errors->first('Fecha')}}</td>
</tr>
<tr align="center">
    <th  class="oo">Hora</th>
    <td><input type="time" class="form-control w-50" name="Hora" value="{{old('Hora',$reserva->Hora)}}"><br>{{$errors->first('Hora')}}</td>
</tr>
<tr align="center">
    <th  class="oo">Nombres</th>
  @auth
    <td><input type="text" class="form-control w-50" name="name" value="{{ Auth::user()->name }}" readonly> <br> {{$errors->first('name')}}</td>
    @endif
</tr>
<tr align="center">
    <td  colspan="2" align="center"><button class="btn tmenu" >{{$btnText}}</button></td>
</tr>