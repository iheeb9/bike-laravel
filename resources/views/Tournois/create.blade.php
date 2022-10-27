@extends('layouts/contentNavbarLayout')
 
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New tournois</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tournois.index') }}"> Back</a>
        </div>
    </div>
</div>
   
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input required type="text" name="nom" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <select name="association->id" id="association" class="form-control">
                    <option value="">Select Association</option>
                    @foreach ($associations as $association)
                        <option value="{{ $association->id }}">{{ $association->nom }}</option>
                    @endforeach
         
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection