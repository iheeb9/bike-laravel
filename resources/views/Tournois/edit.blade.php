@extends('layouts/contentNavbarLayout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Event</h2>
            </div>
       
        </div>
    </div>
   

    <div class="col-6">
<div class="card mb-4 " > 
<h5 class="card-header">  
    <a href="{{ route('tournois.index') }}" class="btn btn-primary btn-md"  float-start >Tournois  list</a></h5>
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
  
    <form action="{{ route('tournois.update',$tournoi->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nom" value="{{ $tournoi->nom }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group pt-3">
                <strong>Date:</strong>
                <input required value="{{ $tournoi->date }}" type="date" name="date" class="form-control" placeholder="date">
            </div>
            </div>
    
            <div class="col pt-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
</div>
</div>
</div>