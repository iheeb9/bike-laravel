<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientHome extends Controller
{
  public function index()
  {
    return view('Client.content.home.home');
  }

}
