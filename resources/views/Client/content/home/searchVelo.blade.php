@extends('Client.layouts.Client_commonMaster')

@section('content')




  <!-- /HEADER -->

  <!-- NAVIGATION -->
  <nav id="navigation">
    <!-- container -->
    <div id="breadcrumb" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb-tree">
              <li><a href="#">Velos</a></li>
              <li><a href="#"> Categories</a></li>

            </ul>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>    <div class="container">
      <!-- responsive-nav -->

      <!-- /responsive-nav -->
    </div>
    <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->



  <!-- SECTION -->
  <div class="section">

  </div>
  <!-- container -->
  <div class="container">
    <div class="">
      <form  action="{{url('search')}}" method="GET" class="form-inline active-pink-3 active-pink-4">
        @csrf
        <input name="search" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
               aria-label="Search">
        <button class="btn bg-white" type="submit">
          rechercher
        </button>
      </form>
      <!-- row -->
      <div class="row">
        <!-- ASIDE -->
        <div id="aside" class="col-md-3">
          <!-- aside Widget -->
          <div class="aside">
            <h3 class="aside-title" style="color:red">Categories</h3>
            <div class="checkbox-filter">
              @foreach($categories as $category)
                <div class="">
                  <label for="category-1">
                    <li><a href="">{{$category->nom}}</a></li>


                    <small></small>
                  </label>
                </div>
              @endforeach

            </div>
          </div>
          <!-- /aside Widget -->



          <!-- aside Widget -->


          <!-- aside Widget -->

          <!-- /aside Widget -->
        </div>
        <!-- /ASIDE -->

        <!-- STORE -->
        <div id="store" class="col-md-9">
          <!-- store top filter -->
          <div class="store-filter clearfix">


          </div>
          <!-- /store top filter -->

          <!-- store products -->

          <div class="row">
            @foreach($searchVelo as $v)
              <!-- product -->
              <div class="col-md-4 col-xs-6">
                <div class="product">
                  <div class="product-img">
                    <img src="{{asset($v->veloImages[0]->image)}}" alt="{{$v->nom}}">
                    <div class="product-label">
                    </div>
                  </div>
                  <div class="product-body">
                    <p class="product-category"></p>
                    <h3 class="product-name"><a href="#">{{$v->nom}}</a></h3>
                    <h4 class="product-price">{{$v->prix_heure}} DT </h4>

                    <div class="product-btns">
                      <button class="add-to-compare"><span class="tooltipp"></span></button>
                    </div>
                  </div>
                  <div class="add-to-cart">
                    <button  class="add-to-cart-btn"> <i class="fa fa-eye"></i> <a href="{{ url ('detailsvelo/'.$v->id.'/details') }}">Voir details</a></button>
                  </div>
                </div>
              </div>
            @endforeach( )

            <!-- /product -->



            <div class="clearfix visible-sm visible-xs"></div>


            <div class="clearfix visible-lg visible-md"></div>



            <div class="clearfix visible-sm visible-xs"></div>




            <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>



          </div>


          <!-- /store products -->

          <!-- store bottom filter -->
          <div class="store-filter clearfix">

            <br>
            <br>
            <br>
            <ul class="pagination justify-content-end">
              <!-- /row -->        {{$searchVelo->links()}}

            </ul>
          </div>
          <!-- /store bottom filter -->
        </div>
        <!-- /STORE -->


      </div>

    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- NEWSLETTER -->
  <div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="newsletter">
            <p>Sign Up for the <strong>NEWSLETTER</strong></p>
            <form>
              <input class="input" type="email" placeholder="Enter Your Email">
              <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
            </form>
            <ul class="newsletter-follow">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /NEWSLETTER -->
@endsection
