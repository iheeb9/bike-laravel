@extends('layouts/contentNavbarLayout')
 
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New association</h2>
        </div>
       
    </div>
</div>
   
<div class="">
<div class="col-6">
<div class="card mb-4 " > 
<h5 class="card-header">  
    <a href="{{ route('association.index') }}" class="btn btn-primary btn-md  float-start ">Associations list</a></h5>
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
   
<form action="{{ route('association.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-2">   </div>
        <div class="col ">
            <div class=" form-group ">
                <strong>Name:</strong>
                <input required type="text" name="nom" class="form-control" placeholder="Name">
            </div>

            <div class="row pt-3  float-start">
        <div class="text-center">
                <button type="submit" class="btn  btn-primary">Submit</button>
        </div>
        </div>
       
    </div>
    <div class="col-2 ">   </div>
</form>
@endsection
</div>
</div>
</div>
</div>
   