<?php

namespace App\Http\Controllers;

use App\Models\circuit;
use Illuminate\Support\Facades\Crypt;
use App\Models\circuit_images;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CircuitController extends Controller
{
    public function index()
    {
        $circuits = circuit::all();
        return view('circuit', compact('circuits'));
    }


    public function get_detail($id)
    {

        $data = Crypt::decrypt($id);

        $circuit = DB::table('circuits')->join('circuit_images', 'circuits.id_circ', '=', 'circuit_images.id_circ')
            ->where('circuits.id_circ', '=', $data)
            ->get();

        return view('circuit_detail', compact('circuit'));
    }


    public function getAddTour()
    {

        return view('Admin.circuit.circuit_sett');
    }


    public function getUpdateTour($id)
    {
        $id_circ = Crypt::decrypt($id);

        $circuit = DB::table('circuits')->join('circuit_images', 'circuits.id_circ', '=', 'circuit_images.id_circ')
            ->where('circuits.id_circ', '=', $id_circ)
            ->get();

        return view('Admin.circuit.circuit_sett', compact('circuit'));
    }





    public function AddTour(Request $request)
    {

        $request->validate([
            '*' => 'required',
            'main_image' => 'required|mimes:jpg,jpeg,png',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png'
        ]);


        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $file) {
                $extension = $file->extension();
                $imageName = rand(111111, 999999) . '.' . $extension;
                $imageurl = "assets/img/circuit_images/" . $imageName;
                $file->move(public_path('/assets/img/circuit_images'), $imageName);
                $data[] = $imageurl;
            }
        }

        if ($request->has('main_image')) {

            $main_extension = $request->main_image->extension();
            $main_imageName = rand(111111, 999999) . '.' . $main_extension;
            $main_imageurl = "assets/img/circuit_images/" . $main_imageName;
            $request->main_image->move(public_path('/assets/img/circuit_images'), $main_imageName);
            $main_image = $main_imageurl;
        }


        $circuit = new circuit();

        $circuit->titre = $request->titre;
        $circuit->circuit_image = $main_image;
        $circuit->description = $request->description;
        $circuit->détail = $request->dètail;


        $circuit->save();



        foreach ($data as $image) {

            $images = new circuit_images();
            $images->id_circ = $circuit->id_circ;
            $images->image = $image;
            $images->save();
        }


        return redirect()->back()->with('message', 'Tour successfully submitted!');
    }


    public function UpdateTour(Request $request, $id)
    {

        $id_circ = Crypt::decrypt($id);

        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $file) {
                $extension = $file->extension();
                $imageName = rand(111111, 999999) . '.' . $extension;
                $imageurl = "assets/img/circuit_images/" . $imageName;
                $file->move(public_path('/assets/img/circuit_images'), $imageName);
                $data[] = $imageurl;
            }
        }


        if ($request->has('main_image')) {

            $main_extension = $request->main_image->extension();
            $main_imageName = rand(111111, 999999) . '.' . $main_extension;
            $main_imageurl = "assets/img/circuit_images/" . $main_imageName;
            $request->main_image->move(public_path('/assets/img/circuit_images'), $main_imageName);
            $main_image = $main_imageurl;
        }


        $circuit = circuit::find($id_circ);

        if ($request->main_image != null) {
            unlink($circuit->circuit_image);

            $circuit->circuit_image = $main_image;
        }

        $circuit->titre = $request->titre;
        $circuit->description = $request->description;
        $circuit->détail = $request->dètail;

        $circuit->update();



        if ($request->images != null) {

            $circuit_images = DB::table('circuit_images')->where('id_circ', $id_circ)->get();
            DB::table('circuit_images')->where('id_circ', $id_circ)->delete();

            foreach ($circuit_images as $image) {
                unlink($image->image);
            }


            foreach ($data as $image) {


                $images = new circuit_images();
                $images->id_circ = $id_circ;
                $images->image = $image;
                $images->save();
            }
        }



        return redirect()->back()->with('message', 'Tour successfully Updated !');
    }




    function getAllcircuits()
    {
        $circuits = circuit::all();

        return view('Admin.circuit.circuits', compact('circuits'));
    }



    function delete(Request $request)
    {



        $request->validate([
            'delete' => 'required',
        ], [
            'delete.required' => 'please select items to delete '
        ]);

        foreach ($request->delete as $id) {
            $circuit = circuit::find($id);
            $circuit_images = DB::table('circuit_images')->where('id_circ', $id)->get();
            foreach ($circuit_images as $image) {
                unlink($image->image);
            }

            unlink($circuit->circuit_image);

            $circuit->delete();
        }

        return redirect()->back()->with('message', 'Tour successfully deleted !');
    }
}
