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
              <li><a href="#"> Tournois</a></li>

            </ul>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <div class="container ">
    <div class="section-title">
            <h3 class="title">Tournaments</h3>
            
          </div>
    <div class="row">
      @forelse($tournoisList as $c)

      <div class="product-widget">
                <div class="product-img">

                  <img src="http://127.0.0.1:8000/assets/Client/img/product04.png" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name"><a href="#" tabindex="0">{{$c->nom}}</a></h3>
                  <h4 class="product-price">Date </h4>
                </div>
              </div>
      
     

      @empty
        <div class="col-md-12">
          <h5>No Tournois</h5>
        </div>
      @endforelse

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
