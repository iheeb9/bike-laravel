@extends('Client.layouts.Client_commonMaster')

@section('content')
  <div class="section">
    <!-- container -->
    <div id="breadcrumb" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb-tree">
              <li><a href="#">Home</a></li>
              <li><a href="#"> Categories</a></li>

            </ul>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <div class="container">
    <div class="row">
      @forelse($data as $c)
      <div class="col-sm-6 mb-4">
        <div class="card" >
          <div class="card-block" >
            <h3 class="card-title"> Nom: </h3> <h5>{{$c->nom}}</h5>
            <h3 class="card-title"> Description : </h3> <h5>{{$c->description}}</h5>
            <a href="{{url('/allcategories/'.$c->slug)}}" class="btn btn-primary">Voir tous les produits </a>
          </div>
        </div>
        <ul class="text-center">
          {{$data->links()}}
        </ul>
      </div>
      @empty
        <div class="col-md-12">
          <h5>No categories</h5>
        </div>
      @endforelse
    </div>

    </div>
  </div>
  <style >
    element.style {
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
      background-color: #D10024 !important;
      border-color: #D10024 !important  ;
      color: white !important;
    }
    .pagination>li>a, .pagination>li>span {
      color: #333 !important;
    }</style>
@endsection
