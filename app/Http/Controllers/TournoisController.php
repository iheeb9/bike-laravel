<?php

namespace App\Http\Controllers;
use App\Models\Associations;
use App\Models\Tournoit;
use Illuminate\Http\Request;

class TournoisController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournoisList = Tournoit::latest()->paginate(10);
        $associationsList = Associations::latest()->paginate(10);
        return view('tournois.index',compact('tournoisList'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournois.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   dd( $request->input('date'));

        $request->validate([
            'nom' => 'required',
            'date' => 'required',
        ]);
        
        $t=Tournoit::create([
            'nom' => $request->nom,
            'date' => $request->date,
            'association_id' => $request->association_id,
        ]);
       // Tournoit::create($t);
       
        return redirect()->route('tournois.index')
                        ->with('success','Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournoit  
     * @return \Illuminate\Http\Response
     */
    public function show(Tournoit $tournois)
    {
        return view('tournois.show',compact('tournois'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournoit  
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournoit $tournois)
    {
        return view('tournois.edit',compact('tournois'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournoit  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournoit $tournois)
    {
        $request->validate([
            'nom' => 'required',
            'date' => 'required',
        ]);
      
        $tournois->update($request->all());
      
        return redirect()->route('tournois.index')
                        ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournoit  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournoit $tournois)
    {
        $tournois->delete();
       
        return redirect()->route('tournois.index')
                        ->with('success','Event deleted successfully');
    }
}
