<?php

namespace App\Http\Controllers\balade\client;

use App\Http\Controllers\Controller;
use App\Models\Balade;
use App\Models\Velo;
use App\Models\VeloImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

class balade_client extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ListBalade = Balade::latest()->paginate(4);

      return view('Client.content.Balade.list_balade',compact("ListBalade"));

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

      $balade=\App\Models\Balade::find($id );
      $velo=Velo::all();
      $image=VeloImage::all();
      return view('Client.content.Balade.showbalade',compact(["balade","velo","image"]));
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

  public function participation(Request $request, Balade $balade)
  {
    $request->validate([
        'velo_id' => 'required',
      ]);
    error_log($balade);
    $participation=new \App\Models\Participation();
    $participation->velo_id=$request->velo_id;
    $participation->user_id=Auth::user()->id;
    $participation->balade_id=$balade->id;
    $participation->prixtotale=$balade->prix;

    $participation->save();
//    $newparticipation=$balade->nbre_participant+1;
//    $balade->update($newparticipation);
    return redirect()->route('clientbalade.index');

  }


}
