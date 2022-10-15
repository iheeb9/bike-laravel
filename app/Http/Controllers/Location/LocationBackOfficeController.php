<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\User;
use App\Models\Velo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LocationBackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListLocation = Location::latest()->paginate(5);
        return view('content.location.view-location-back',compact("ListLocation"));
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


        return view('content.location.AddLocation')
        ->with(compact('ListUser'))
        ->with(compact('ListVelo'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Post = $this->validate($request,[
            'user'=>'required',
            'velo'=>'required',
            'date_start' => 'required|date',
            'date_end' => 'date|after:date_start'
                ]);
        $date_start = Carbon::parse($request->date_start)->format('Y-m-d');
        $date_end = Carbon::parse($request->date_end)->format('Y-m-d');
        $location = Location::create(['date_start' => $date_start, 'date_end' => $date_end, 'user_id' => $request->user,'velo_id' => $request->velo]);
        return redirect('/admin/location');


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
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
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
