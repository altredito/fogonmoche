<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
class ProfileImageController extends Controller
{
    //

    public function store(ProfileUpdateRequest $request)
    {
        $userId = Auth::id(); // Obtén el ID del usuario autenticado
    
        $user = User::find($userId); // Obtén el usuario desde la base de datos
    
        if ($request->hasFile('image')) {
            $user->image = $request->file('image')->store('images');
        }
    
        $user->save();
    
        return redirect()->route('profile.edit')->with('status', 'La foto de perfil fue actualizada correctamente');
    }

    public function update(User $user, ProfileUpdateRequest $request){
        if($request->hasFile('image')){
            Storage::delete([$user->image]);
           $user->fill($request->validated());
           $user->image =$request->file('image')->store('images');
           $user->save();
        }
        else{
            $user->update(array_filter($request->validated()));
        }
        return redirect()->route('profile.edit',$user)->with('status','La foto de Perfil fue actualizada correctamente');
    }
    public function destroy(User $user){

        Storage::delete($user->image);
        $user->delete();

        return redirect()->route('profile.edit')->with('status','La foto de perfil fue eliminado correctamente');
    }
}
