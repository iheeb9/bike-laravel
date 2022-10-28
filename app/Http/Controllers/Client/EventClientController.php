<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evennement;
use Illuminate\Support\Facades\Storage;

class EventClientController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // client interface
    public function index()
    {
        $events = Evennement::all();

//         dd($storagePath);
        return view('Client\events\index', compact('events'));
    }
public function show($id)
{

    $event = Evennement::findOrFail($id);
    return view('Client\events\showevent',compact('event'));
}
    

}