@extends('layouts/contentNavbarLayout')
 
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb pb-5    ">
            <div class="pull-left">
                <h2> Tournaments </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tournois.create') }}"> Create New tournament </a>
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
            <th>Date</th>
        </tr>
        @foreach ($tournoisList as $tournois)
        <tr>
            <td>{{ $tournois->id }}</td>
            <td>{{ $tournois->nom }}</td>
            <td>{{ $tournois->date }} </td>
            <td>
            <form action="{{ route('tournois.destroy',$tournois->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('tournois.show',$tournois->id) }}">Show</a>
            </form>
            </td>
            <td>
            <form action="{{ route('tournois.destroy',$tournois->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('tournois.edit',$tournois->id) }}">Edit</a>
            </form>
            </td>
            <td>
            <form action="{{ route('tournois.destroy',$tournois->id) }}" method="POST">
            @csrf
   @method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
   </form>
            </td>
        </tr>
        @endforeach
    </table>
  
 
      
@endsection