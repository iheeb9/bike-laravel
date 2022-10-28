<?php

namespace App\Http\Controllers;


use App\Models\Associations;
use Illuminate\Http\Request;
use App\Http\Controllers\TournoisController;

class AssociationController extends Controller
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
        $associationList = Associations::latest()->paginate(5);
        return view('associations.index',compact('associationList'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('associations.create');
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
        
        $t=Associations::create([
            'nom' => $request->nom,
        ]);
        return redirect()->route('association.index')
                        ->with('success','Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Associations  
     * @return \Illuminate\Http\Response
     */
    public function show(Associations $association)
    {
        $tournoisList = $association->tournoit;
        return view('associations.show',compact('association','tournoisList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Associations  
     * @return \Illuminate\Http\Response
     */
    public function edit(Associations $association)
    {
        return view('associations.edit',compact('association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Associations  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Associations $association)
    {
        $request->validate([
            'nom' => 'required'
        ]);
      
        $association->update($request->all());
      
        return redirect()->route('association.index')
                        ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Associations  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associations $association)
    {
        $association->Tournoit()->delete();
        $association->delete();
       
        return redirect()->route('association.index')
                        ->with('success','Event deleted successfully');
    }
}
