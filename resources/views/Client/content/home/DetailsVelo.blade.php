@extends('Client.layouts.Client_commonMaster')

@section('content')
  <!-- SECTION -->
  <!-- /HEADER -->

  <!-- NAVIGATION -->
  <!-- /NAVIGATION -->

  <!-- BREADCRUMB -->
  <div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /BREADCRUMB -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- Product main img -->

        <div class="col-md-5 col-md-push-2">

          <div id="product-main-img">
            <div class="product-preview">
                <img src="{{asset($v->veloImages[0]->image)}}" alt="">
            </div>


          </div>
        </div>
        <!-- /Product main img -->

        <!-- Product thumb imgs -->
        <div class="col-md-2  col-md-pull-5">
          <div id="product-imgs">
            @foreach($v->veloImages as $im)
              <img src="{{asset($im->image)}}" alt="">
            @endforeach
          </div>
        </div>
        <!-- /Product thumb imgs -->

        <!-- Product details -->
        <div class="col-md-5">
          <div class="product-details">
            <h2 class="product-name">{{$v->nom}}</h2>
            <div>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
            <div>
              <h3 class="product-price">Prix Heure : {{$v->prix_heure}} DT</h3>
              <span class="product-available"></span>
            </div>
            <h3 class="product-price">Description  :</h3>
            <p>{{$v->description}}</p>
            <div class="product-options">

            </div>

            <div class="add-to-cart">

              <button class="add-to-cart-btn"> {{$v->Disponibilite}}</button>
            </div>



            <ul class="product-links">
              <li>Category:</li>
              <li><a href="#">{{$v->Category->nom}}</a></li>
            </ul>

            <ul class="product-links">
              <li>Share:</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>

          </div>
        </div>
        <!-- /Product details -->

        <!-- Product tab -->
        <div class="col-md-12">
          <div id="product-tab">
            <!-- product tab nav -->
            <ul class="tab-nav">
              <li class="active"><a data-toggle="tab" href="#tab1">Details</a></li>
              <li><a data-toggle="tab" href="#tab2">Velo</a></li>
              <li><a data-toggle="tab" href="#tab3">{{$v->serie}}</a></li>
            </ul>
            <!-- /product tab nav -->

            <!-- product tab content -->
            <!-- /product tab content  -->
          </div>
        </div>
        <!-- /product tab -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->



  <!-- jQuery Plugins -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/nouislider.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/main.js"></script>


@endsection
