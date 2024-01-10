<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\reservation;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Index()
    {
        //$reservations = DB::table('reservations')->join('motos', 'motos.id_moto', '=', 'reservations.id_moto')->get();
        $reservations = DB::table('reservations as res')
        ->select('id_res','v1.nom_ville as pick_up','v2.nom_ville as drop_off','number','date_debut','date_fin','c_full_name','c_phone','c_email','marque','modèle')
        ->join('villes as v1','res.pick_up_p','=','v1.id_ville')
        ->join('villes as v2','res.drop_off_p','=','v2.id_ville')->join('motos', 'motos.id_moto', '=', 'res.id_moto')
        ->get();
        $messages = message::all();

        return view('Admin.dashboard', compact('reservations','messages'));
    }


    public function deleteReservation(Request $request)
    {
        $request->validate([
            'delete' => 'required',
        ], [
            'delete.required' => 'please select items to delete '
        ]);

        foreach ($request->delete as $id) {
            $reservation = reservation::find($id);
            $reservation->delete();
        }
        
        return redirect()->back()->with('Res-message', 'Resevarion successfully deleted !');
    }

    public function deleteMessage(Request $request)
    {
        $request->validate([
            'delete' => 'required',
        ], [
            'delete.required' => 'please select items to delete '
        ]);

        foreach ($request->delete as $id) {
            $message = message::find($id);
            $message->delete();
        }
        
        return redirect()->back()->with('message', 'Message successfully deleted !');
    }
}
