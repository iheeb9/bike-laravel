@extends('layouts/contentNavbarLayout')
 
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tournament details </h2>
            </div>
       
        </div>
    </div>
   

    <div class="col-6">
    <div class="card mb-4 " >
    <h5 class="card-header">  
    <div class="pull-right">
    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tournois.index') }}"> Back</a>
            </div>
            </div></h5> 
            <div class="card-body demo-vertical-spacing demo-only-element" > 
    <div class="row h3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <h5>  {{ $tournoi->nom }}</h5> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <h5>   {{ $tournoi->date }}</h5> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Association :</strong>
                <h5>  {{ $association->nom }}</h5> 
            </div>
        </div>
      
    </div>
    </div>
    </div>
    </div>
@endsection