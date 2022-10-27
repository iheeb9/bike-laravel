@extends('Client/layouts/Client_commonMaster')

@section('content')
  <!-- SECTION -->
  <!-- /SECTION -->

  <!-- SECTION -->

  <div class="section">
    <!-- container -->

    <div>

      <!-- row -->
      <div class="row">

        <!-- section title -->
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12 col-lg-12 mb-8">

          <div class="row">
            <div class="products-tabs">
              <!-- tab -->
              <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                  <!-- product -->
                  @foreach($ListReview as $review)
                    <div class="product">
                      <div class="product-img">
                        <img  src="{{asset('images/'.$review->image)}}" alt="">
                        <div class="product-label">

                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">{{$review->date}}</p>
                        <h3 class="product-name"><a href="#">{{$review->nom}}</a></h3>
                        <h4 class="product-price"> <p class="product-category">{{$review->Description}}</p></h4>

                        <div class="product-btns">



                          <button   onclick="window.location='{{ route('clientreview.show',$review->id) }}'"  class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>




                        </div>
                      </div>

                    </div>
                @endforeach
                <!-- /product -->


                  <!-- /product -->
                </div>
                <div id="slick-nav-1" class="products-slick-nav"></div>
              </div>
              <!-- /tab -->
            </div>
          </div>

        </div>
        <!-- Products tab & slick -->

      </div>

      <!-- /row -->
    </div>

    <!-- /container -->
  </div>

  <!-- /SECTION -->

  <!-- HOT DEAL SECTION -->

  <!-- /SECTION -->

  <!-- SECTION -->
  <!-- /SECTION -->

  <!-- /NEWSLETTER -->


@endsection
