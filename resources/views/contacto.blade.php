@extends('layouts.master')
@section('title','Contacto')
@section('content')

<br>
<br>
<br> 
<div class= "cc4">
        <div class="cc2">
                <h1 class="titulo">Contacto </h1>
        </div>     
        <!--Google map y formulario-->
        <table class="table table-borderless" style=" height:40vw; ">
         <tr >
            <td colspan="8" align="center" style="width:40vw; ">
               <form action="https://formsubmit.co/gonzavale25@gmail.com" method="POST">
                         <p class="h4 mb-4">Contáctanos</p>
                         Nombre
                        <input type="text"  name="name" class="form-control" placeholder="Ingresa tu nombre" required>
                        <br>
                        Correo
                        <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo"required>
                        <br>
                        Teléfono
                        <input type="tel"   name="phone" class="form-control" placeholder="999 999 999" maxlength="9"
                        required> 
                        <br>
                        Consulta 
                        <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Escriba su consulta" required></textarea>
                        <br>
                        <button class="btn registro text-white" type="button submit">Enviar</button>
               </form>
            </td>
            <td colspan="12" align="center" >
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1974.6680429223459!2d-79.0129785!3d-8.1688553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad1900e57496f3%3A0x30f43f51ab588016!2sEl%20FOG%C3%93N%20DE%20MOCHE!5e0!3m2!1ses-419!2spe!4v1688592577084!5m2!1ses-419!2spe" 
               style="border:0; width:60vw; height:40vw; border-radius: 7px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </td>
         </tr>
         <tr>
            <td><img src="/imagenes/ubi.jpg" style="width:3.5vw; height: 3.5vw; border-radius: 50px;"></td>
            <td colspan="4"><a class=" oo" href="https://www.google.com/maps/place/El+FOGÓN+DE+MOCHE/@-8.1688049,-79.0119405,15z/data=!4m6!3m5!1s0x91ad1900e57496f3:0x30f43f51ab588016!8m2!3d-8.1688049!4d-79.0119405!16s%2Fg%2F11h6vqm5qz?entry=ttu" target="_blank" >Mz. E Lt. 4 Urb El Paraiso Moche</a></td>
            <td><img src="/imagenes/fb.png" style="width:3.5vw; height: 3.5vw; border-radius: 50px;"></td>
            <td><a class=" oo" href="https://www.facebook.com/elfogonmoche?mibextid=ZbWKwL" target="_blank" > El Fogon de Moche</a></td>
            <td><img src="/imagenes/fb.png" style="width:3.5vw; height: 3.5vw; border-radius: 50px;"></td>
            <td><a class=" oo" href="https://www.facebook.com/profile.php?id=100055222302588&mibextid=ZbWKwL" target="_blank"> EL FOGON DE MOCHE</a></td>
            <td> <img src="/imagenes/ig.png" style="width:3.5vw; height: 3.5vw; border-radius: 50px;"></td>
            <td><a class=" oo" href="https://www.instagram.com/el.fogon.de.moche/?igshid=NTc4MTIwNjQ2YQ%3D%3D" target="_blank"> @el.fogon.de.moche</a></td>
            <td><img src="/imagenes/tt.png" style="width:3.5vw; height: 3.5vw; border-radius: 50px;"></td>
            <td><a class=" oo" href="https://www.tiktok.com/@elfogondemoche" target="_blank"> @elfogondemoche</a></td>
            <td><img src="/imagenes/telefono.png" style="width:3.5vw; height: 3.5vw; border-radius: 50px;"></td>
            <td><a class=" oo" href="https://api.whatsapp.com/send/?phone=939459100&text&type=phone_number&app_absent=0" target="_blank">939459100</a></td>
         </tr>

        </table>
       <!--Google Maps y formulario-->
</div>


@endsection