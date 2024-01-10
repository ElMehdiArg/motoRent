<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Mail\reservationMail;
use App\Models\moto;
use Illuminate\Support\Facades\Mail;


class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $motos=DB::table('motos')->get();
       $villes=DB::table('villes')->get();


        return view('accueil',compact('motos','villes'));
    }

    public function reservation(Request $request)
    {

        
        $request->validate([
            '*' => 'required|max:255',
            'c_email' => 'email',
        ],[
            'required' => 'All field required !',
            'email' => 'Email invalid !',
        ]);


        $reservation = new reservation();


        $reservation->number = $request->number;
        $reservation->date_debut = $request->date_debut;
        $reservation->date_fin = $request->date_fin;
        $reservation->pick_up_p = $request->pick_up_p;
        $reservation->drop_off_p = $request->drop_off_p;
        $reservation->c_full_name = $request->c_full_name;
        $reservation->c_phone = $request->c_phone;
        $reservation->c_email = $request->c_email;
        $reservation->id_moto = $request->id_moto;


        $reservation->save();

        $data = $request->all();

        $moto = moto::find($request->id_moto);

        Mail::to("salut.ken19952@gmail.com")->send(new reservationMail($data,$moto));

        return response()->json([ 'success'=> 'Reservation successfully submitted!']);

        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
