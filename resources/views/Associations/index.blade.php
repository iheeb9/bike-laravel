@extends('layouts/contentNavbarLayout')
 
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb pb-5    ">
            <div class="pull-left">
                <h2> Associations </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('association.create') }}"> Create New association </a>
            </div>
        </div>
    </div>
   

    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   




    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th></th>
        </tr>
        @foreach ($associationList as $association)
        <tr>
        <td>{{ $association->id }}</td>
            <td>{{ $association->nom }}</td>
            <td>
            <form action="{{ route('association.destroy',$association->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('association.show',$association->id) }}">Show ss</a>
            </form>
            </td>
            <td>
            <form action="{{ route('association.destroy',$association->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('association.edit',$association->id) }}">Edit</a>
            </form>
            </td>
            <td>
            <form action="{{ route('association.destroy',$association->id) }}" method="POST">
            @csrf
   @method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
   </form>
            </td>
        </tr>
        @endforeach
    </table>








  
  
 
      
@endsection