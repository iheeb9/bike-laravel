<?php

namespace App\Http\Controllers\Location\client;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Velo;
use Carbon\Carbon;

class locationFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListUser = User::all();
        $ListVelo = Velo::all();
        $mytime = Carbon::now()->format('Y-m-d');;
        $id = Auth::id();
        $ListLocation = Location::latest()->where('user_id',$id)->paginate(3);
        return view('Client.content.location.location')
        ->with(compact("ListLocation"))
        ->with(compact('ListUser'))
        ->with(compact('ListVelo'))
        ->with(compact('mytime'))
        ;  
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ListUser = User::all();
        $ListVelo = Velo::all();
        $mytime = Carbon::now()->format('Y-m-d');;

        return view('Client.content.location.addlocation')
        ->with(compact('ListUser'))
        ->with(compact('ListVelo'))
        ->with(compact('mytime'))
        ;      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Post = $this->validate($request,[
            'velo'=>'required',
            'date_start' => 'required|date',
            'date_end' => 'date|after:date_start'
                ]);
        $date_start = Carbon::parse($request->date_start)->format('Y-m-d');
        $date_end = Carbon::parse($request->date_end)->format('Y-m-d');
        $location = Location::create(['date_start' => $date_start, 'date_end' => $date_end, 'user_id' => Auth::user()->id,'velo_id' => $request->velo]);
        return redirect('/c_location');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
        $ListUser = User::all();
        $ListVelo = Velo::all();
        $mytime = Carbon::now()->format('Y-m-d');;

        $location->user_id = User::find( $location->user_id);
        $location->velo_id = Velo::find( $location->velo_id);
        return view('Client.content.location.editlocation')
        ->with(compact('location'))
        ->with(compact('ListUser'))
        ->with(compact('ListVelo'))
        ->with(compact('mytime'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Post = $this->validate($request,[
            'velo'=>'required',
            'date_start' => 'required|date',
            'date_end' => 'date|after:date_start'
                ]);

        $location=Location::find($id);
        $date_start = Carbon::parse($request->date_start)->format('Y-m-d');
        $date_end = Carbon::parse($request->date_end)->format('Y-m-d');
        
         $location ->update(['date_start' => $date_start, 'date_end' => $date_end, 'user_id' => Auth::user()->id,'velo_id' => $request->velo]);
        

         $location->save();
         return redirect('/c_location');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
