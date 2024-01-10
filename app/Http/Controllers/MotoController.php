<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Support\Facades\Crypt;
use App\Models\moto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motos = DB::table('motos')->join('categories', 'categories.id_cat', '=', 'motos.id_cat')->where('m_catégorie', 'Moto')->get();
        $villes = DB::table('villes')->get();

        return view('moto', compact('motos','villes'));
    }


    public function getAllMotos()
    {

        $motos = moto::all();
        return view('Admin.Moto.motos', compact('motos'));
    }


    public function getAddMoto()
    {
        $types = categories::all();
        return view('Admin.Moto.moto_sett', compact('types'));
    }


    public function getUpdateMoto($id)
    {

        $id_moto = Crypt::decrypt($id);
        $types = categories::all();
        $moto = DB::table('motos')->join('categories', 'categories.id_cat', '=', 'motos.id_cat')->where('motos.id_moto', $id_moto)->get()->first();

        return view('Admin.Moto.moto_sett', compact('moto', 'types'));
    }



    public function AddMoto(Request $request)
    {

        $request->validate([
            '*' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);


        if ($request->has('image')) {

            $imageName = rand(1111, 9999) . '_' . $request->image->getClientOriginalName();
            $imageurl = "assets/img/" . $imageName;
            $request->image->move(public_path('/assets/img'), $imageName);
            $image = $imageurl;
        }


        $moto = new moto();

        $moto->marque = $request->marque;
        $moto->modèle = $request->model;
        $moto->cylindrée = $request->cylinder;
        $moto->moto_img = $image;
        $moto->id_cat = $request->type;


        $moto->save();



        return redirect()->back()->with('message', 'Moto successfully submitted !');
    }


    public function UpdateMoto(Request $request, $id)
    {

        $request->validate([
            '*' => 'required',
            'image' => 'mimes:jpg,jpeg,png'
        ]);



        if ($request->has('image')) {

            $imageName = rand(1111, 9999) . '_' . $request->image->getClientOriginalName();
            $imageurl = "assets/img/" . $imageName;
            $request->image->move(public_path('/assets/img'), $imageName);
            $image = $imageurl;
        }


        $moto = moto::find($id);

        if ($request->image != null) {

            unlink($moto->moto_img);
            $moto->moto_img = $image;
        }

        $moto->marque = $request->marque;
        $moto->modèle = $request->model;
        $moto->cylindrée = $request->cylinder;
        $moto->id_cat = $request->type;

        $moto->update();

        return redirect()->back()->with('message', 'Moto successfully Updated !');



    }


    function delete(Request $request)
    {


        $request->validate([
            'delete' => 'required',
        ], [
            'delete.required' => 'please select items to delete '
        ]);

        foreach ($request->delete as $id) {
            $moto = moto::find($id);

            if(is_file(public_path($moto->moto_img))){
                unlink($moto->moto_img);
                $moto->delete();
            }else{
                $moto->delete();
            }
        }


        return redirect()->back()->with('message', 'Moto successfully deleted !');
    }
}
