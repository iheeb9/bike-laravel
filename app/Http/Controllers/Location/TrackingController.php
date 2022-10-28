<?php

namespace App\Http\Controllers\Location;

use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Velo;

class TrackingController extends Controller
{
   

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
    public function store(Location $location)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $tracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracking $tracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        //
    }

    // public function ajaxid(Request $request){
    //     // $rires = Ride::find($request->id);
    //     // return response()->json($rires);
    //     $location = Location::find( $request->id);
    //     $tracking = Tracking::where('location_id',$location->id);
    //     dd($tracking->lng);
    //     $velo = Velo::find( $location->velo_id);
    //     return view('content.location.Tracking')
    //     ->with(compact('velo'))
    //     ->with(compact('tracking'))
    //     ->with(compact('location'));
    //     }
        
        public function index() {
            $data = Tracking::latest()->paginate(5);
           // dd(Association::find($data[0]->association_id));
            return view('content.location.Tracking')
            -> with(compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);}
        
        public function ajax(Request $request){
            $data = Tracking::latest()->paginate(100);
            return response()->json($data);
            }
        
            public function ajaxid(Request $request){
                $rires = Tracking::find($request->id);
                return response()->json($rires);
                }
                public function showing($id) {
                    $tracking =  Tracking::where('location_id', '=', $id)->firstOrFail();    
                   // dd(Association::find($data[0]->association_id));
                    return view('content.location.Tracking')
                    -> with(compact('tracking'))

                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


}
