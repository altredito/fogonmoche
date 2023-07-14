<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CreateReservaRequest;

class ReservasController extends Controller
{
    //
    public function index(){
        $users= Auth::user()->name;
        $reservas = Reserva::where('name', $users)
            ->orderBy('name', 'asc')
            ->get()
            ->groupBy('name')
            ->map->first();
        return view('reservas', compact('reservas'));
    }
    public function show($name){
        return view('show',[
            'reserva' => Reserva::where('name', $name)->get()
        ]);
    }
    public function create(){
        return view('create',[
            'reserva'=> new Reserva
        ]);
    }
    public function store(CreateReservaRequest $request)
    {
    Reserva::create($request->validated());
    return redirect()->route('reservas.index');
    }
    public function edit(Reserva $id){
        return view('edit',[
            'reserva' => $id
        ]);
    }
    public function update(Reserva $id, CreateReservaRequest $request){
        $id->update($request->validated());

        return redirect()->route('reservas.index');
    }
    public function destroy(Reserva $id){
        $id->delete();

        return redirect()->route('reservas.index');

    }
}