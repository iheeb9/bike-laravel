<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evennement;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // admin event interface
    public function index()
    {
        $events = Evennement::all();
        //  dd($events);
        return view('content/dashboard/events/index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('content/dashboard/events/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',

        ]);



        $name = $request->file('image')->hashName();
        request()->file('image')->move(public_path() . '/images/', $name);
        $title = $request->input('title');
        $description = $request->input('description');
        $phone = $request->input('phone');
        $adresse = $request->input('adresse');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        //    dd($title);
        $data = Evennement::create([
            'title' => $title,
            'description' => $description,
            'phone' => $phone,
            'image' => $name,
            'adresse' => $adresse,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        session()->flash('success', 'Event ADDED successfully');

        return redirect()->route('events.index');
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

        $event = Evennement::findOrFail($id);
        //    dd($event);
        return view('content/dashboard/events/edit', compact('event'));
    }

    public function edit2($id)
    {

        $event = Evennement::findOrFail($id);
        // dd($event);
        return view('content/dashboard/events/edit', compact('event'));
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

    }
    
    public function update2(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',


        ]);

        $name = $request->file('image')->hashName();
        request()->file('image')->move(public_path() . '/images/', $name);
        $title = $request->input('title');
        $description = $request->input('description');
        $phone = $request->input('phone');
        $adresse = $request->input('adresse');

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');


        $event = Evennement::findOrFail($id);
        $event->title=$title;
        $event->description=$description;
        $event->phone=$phone;
        $event->adresse=$adresse;
        $event->start_date=$start_date;
        $event->end_date=$end_date;
        $event->image=$name;

        $event->save();
        session()->flash('success', 'Event ADDED successfully');

        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $event = Evennement::find($id);
        $event->delete();
        session()->flash('danger', 'Event Deletted successfully');

        return redirect()->route('events.index');
    }
}
