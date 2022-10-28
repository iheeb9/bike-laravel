@extends('Client/layouts/Client_commonMaster')

@section('content')
<div>
    <h1 style="text-align: center; color: gray;">Liste des Sponsors</h1>
    <br>
    <br>
    <div class="container">
  <div class="row">
  <div class="col-sm-4">
        
     <img src="{{$array[1]}}"  width="300px;">
     <h5 class="card-title font-weight-bold  ">Runway Plus 
</h5>
<span ><a  style="color: green;"href="https://wegoboard.com/trottinette-electrique/400-trottinette-electrique-pliable-barooder.html#ae5" >Sur le site officiel</a></span>

    </div>

    
    <div class="col-sm-4">
        
     <img src="{{$array[2]}}" width="300px;" >
     <h5 class="card-title font-weight-bold  ">BOOMER PRO
</h5>
<span ><a  style="color: green;"href="https://wegoboard.com/29-trottinette-electrique#ae5" >Sur le site officiel</a></span>

    </div>

    
    <div class="col-sm-4">
        
     <img src="{{$array[3]}}"  width="300px;">
     <h5 class="card-title font-weight-bold  ">Blaster 
</h5>
<span ><a  style="color: green;"href="#" >Sur le site officiel</a></span>

    </div>

    
    <div class="col-sm-4">
        
     <img src="{{$array[4]}}"  width="300px;">
     <h5 class="card-title font-weight-bold  ">Dualtron Thunder
</h5>
<span ><a  style="color: green;"href="https://wegoboard.com/29-trottinette-electrique#ae5" >Sur le site officiel</a></span>


    </div></div>
</div>
</div>
@endsection