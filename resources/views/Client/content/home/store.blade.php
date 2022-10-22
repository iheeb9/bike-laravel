@extends('Client.layouts.Client_commonMaster')

@section('content')




  <!-- /HEADER -->

  <!-- NAVIGATION -->
  <nav id="navigation">
    <!-- container -->
    <div class="container">
      <!-- responsive-nav -->

      <!-- /responsive-nav -->
    </div>
    <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->



  <!-- SECTION -->
  <div class="section">
    <div id="breadcrumb" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb-tree">
              <li><a href="#">Home</a></li>
              <li><a href="#">Velos</a></li>
            </ul>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    </div>
    <!-- container -->
    <div class="container">

      <!-- row -->
      <div class="row">
        <!-- ASIDE -->
        <div>
          <form  action="{{url ('search') }}"  method="GET" class="form-inline active-pink-3 active-pink-4"  enctype="multipart/form-data">
            @csrf

            <input name="search" class="form-control form-control-sm ml-3 w-75"  value="{{ Request::get('/search')}}" type="text" placeholder="Search"
                   aria-label="Search">
            <button class="btn bg-white" type="submit">
              rechercher
            </button>
          </form>
        </div>

        <div id="aside" class="col-md-3">
          <!-- aside Widget -->
          <div class="aside">


            <h3 class="aside-title" style="color:red">Categories</h3>
            <!-- NAV -->   @foreach($categories as $category)

            <div class="checkbox-filter">
              <div class="input-checkbox">
                <input type="checkbox" id="category-1">
                <label for="category-1">
                  <span></span>
                  <a href="{{url('/allcategories/'.$category->slug)}}">{{$category->nom}}</a>

                </label>
              </div>
            </div>
            @endforeach

            <div class="checkbox-filter">



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
            @foreach($data as $v)
            <!-- product -->
            <div class="col-md-4 col-xs-6">
              <div class="product">
                <div class="product-img">
                  <img src="{{asset($v->image)}}" alt="{{$v->nom}}">
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
                   <button  class="add-to-cart-btn"> <i class="fa fa-eye"></i> <a href="{{ url ('detailsvelo/'.$v->velo_id.'/details') }}">Voir details</a></button>
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
              <ul class="text-center">
                {{$data->links()}}
              </ul>
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
