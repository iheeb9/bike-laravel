@extends('layouts/contentNavbarLayout')
 
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Association details</h2>
            </div>

        </div>
    </div>

    <div class="col-6">
    <div class="card mb-4 " >
    <h5 class="card-header">  
    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('association.index') }}"> Back</a>
            </div></h5> 
<div class="card-body demo-vertical-spacing demo-only-element" > 
    <div class="row h3 ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="form-group">
                <strong>Name:</strong>
                <h5>      {{ $association->nom }} </h5>
            </div>
        </div>
       
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        @if ($tournoisList->count() > 0)
          <Table class="table table-bordered">
            <thead>          
                <tr>
                   <th>Name</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tournoisList as $tournoi)
                    <td>{{ $tournoi->nom }}</td>
                    <td>{{ $tournoi->date }}</td>                  
                </tr>
                @endforeach
            </tbody>
        @else
            <p class="text-color-red" >There are no tournaments for this association</p>
        @endif
        </div>

</div>
</div>
</div>
</div>
@endsection