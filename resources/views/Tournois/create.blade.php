@extends('layouts/contentNavbarLayout')
 
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New tournois</h2>
        </div>

    </div>
</div>
   

<div class="">
<div class="col-6">
<div class="card mb-4 " > 
<h5 class="card-header">  
    <a href="{{ route('tournois.index') }}" class="btn btn-primary btn-md"  float-start >Tournois iations list</a></h5>
<div class="card-body demo-vertical-spacing demo-only-element" > 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('tournois.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col">
            <div class="form-group pt-3">
                <strong>Name:</strong>
                <input required type="text" name="nom" class="form-control" placeholder="Name">
            </div>
            <div class="form-group pt-3">
                <strong>Date:</strong>
                <input required type="date" name="date" class="form-control" placeholder="date">
            </div>
            <div class="form-group pt-3">
            <strong>Association :</strong>
                <select name="associationId" id="association" class="form-control">
                    <option value="">Select Association</option>
                    @foreach ($associationsList as $association)
                        <option value="{{ $association->id }}">{{ $association->nom }}</option>
                    @endforeach
                    </select>
         
        </div>
        
        <div class="row pt-3  float-start">
        <div class="text-center">
                <button type="submit" class="btn  btn-primary">Submit</button>
        </div>
        </div>
    </div>
   
</form>
@endsection
</div>
</div>
</div>
</div>
   




