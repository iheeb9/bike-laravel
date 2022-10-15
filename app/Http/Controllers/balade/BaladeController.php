<?php

namespace App\Http\Controllers\balade;

use App\Http\Controllers\Controller;
use App\Models\Balade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BaladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ListBalade = Balade::latest()->paginate(5);

      return view('content.Balade.Balade',compact("ListBalade"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('content.Balade.ajouter_balade',);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    $name = $request->file('image')->getClientOriginalName();
      request()->file('image')->move(public_path() . '/images/' , $name);
      $balade=new \App\Models\Balade;
      $balade->titre=$request->titre;
      $balade->description=$request->description;
      $balade->nombre=$request->nombre;
      $balade->jauge=$request->jauge;
      $balade->prix=$request->prix;
      $balade->nbre_participant=$request->nbre_participant;
      $balade->info_billetterie=$request->info_billetterie;
      $balade->distance=$request->distance;
      $balade->guide_accompagnateur=$request->guide_accompagnateur;
      $balade->depart=$request->depart;
      $balade->arrive=$request->arrive;
      $balade->date=$request->date;
      $balade->disponible=$request->disponible;
      $balade->Services=$request->Services;
      $balade->nbre_participant=0;
      $balade->image=$name;
      $balade->save();

      return redirect('/admin/balade');
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
