<section class="infop">
    <div style=" margin-left: 40px;">
        <header>
            <br>
            <h2 class="titulo" style="font-size: 2.5vw;">
                {{ __('Cambiar Foto de Perfil') }}
            </h2>
    
            <p class="parrafo">
                {{ __('En este apartado puede cambiar su foto de perfil') }}
            </p>
        </header>
        <table>

            <tr >
            <form action="{{ route('profileimage.update')}}" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
                @csrf
                @if(Auth::user()->image)
                <td style="width:15vw" class="centro">
                    <img src="/storage/{{ Auth::user()->image}}" alt="Avatar" class="img-fluid" style="width: 150px;border-radius: 100%;"/>
                </td>
                <td align="center">
                    <label class="custom-file-control" for="customFile">
                    <i class="fas fa-upload"></i> Subir foto</label>
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <x-primary-button class="registro" >{{ __('Cambiar') }}</x-primary-button>
                   
                </td>
                 @else
                 <td style="width:15vw" class="centro">
                    <img src="/imagenes/perfil.png" alt="Avatar" class="img-fluid" style="width: 150px;border-radius: 100%;"/>
                
                 </td>
                 <td align="center">
                    <label class="custom-file-control" for="customFile">
                    <i class="fas fa-upload"></i> Subir foto</label>
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <x-primary-button class="registro" >{{ __('Cambiar') }}</x-primary-button>
                 </td>
                @endif
                </form>
         

            </tr>  

        </table>
        <br>

</section>
