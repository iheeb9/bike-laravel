<?php

namespace App\Http\Controllers;

use App\Models\Evennement;
use Illuminate\Http\Request;

class EvennementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evennements = Evennement::latest()->paginate(5);
      
        return view('events.index',compact('evennements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);
      
        Evennement::create($request->all());
       
        return redirect()->route('evennements.index')
                        ->with('success','Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evennement  $evennement
     * @return \Illuminate\Http\Response
     */
    public function show(Evennement $evennement)
    {
        return view('events.show',compact('evennement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evennement  $evennement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evennement $evennement)
    {
        return view('events.edit',compact('evennement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evennement  $evennement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evennement $evennement)
    {
        $request->validate([
            'nom' => 'required',
        ]);
      
        $evennement->update($request->all());
      
        return redirect()->route('evennements.index')
                        ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evennement  $evennement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evennement $evennement)
    {
        $evennement->delete();
       
        return redirect()->route('evennements.index')
                        ->with('success','Event deleted successfully');
    }
}
